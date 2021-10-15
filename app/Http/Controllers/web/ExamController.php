<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class ExamController extends Controller
{
    function show($examId,Request $request){
        $data['canViewStartBtn']=true;
        $user=Auth::user();
        $request->session()->flash('prev',"start/$examId");
        if($user!=null){
            $pivotRow=$user->exams()->where('exam_id',$examId)->first();
            if($pivotRow!=null and $pivotRow->pivot->status=='closed'){
                $data['canViewStartBtn']=false;
            }
        }
        $data['exam']=Exam::findOrFail($examId);
        return view("web.home.exam")->with($data);
    }
    function start($examId,Request $request){
        $user=Auth::user();
        if(session('prev')!="start/$examId"){
            return redirect(url("/exam/$examId"));
         }
        $request->session()->flash('prev',"questions/$examId");
        $user->exams()->attach($examId);
        return redirect(url("/exam/questions/$examId"));
    }

    function Questions($examId,Request $request){
        if(session('prev')!="questions/$examId"){
           return redirect(url("/exam/$examId"));
        }
        $request->session()->flash('prev',"submit/$examId");
        $data['exam']=Exam::findOrFail($examId);
        return view("web.home.exam_questions")->with($data);
    }

    function submit($examId,Request $request){
        if(session('prev')!="submit/$examId"){
            return redirect(url("/exam/$examId"));
         }
        $user=Auth::user();
            $request->validate([
                'ans'=>'required|array',
                'ans.*'=>'required|in:1,2,3,4'
              ]);
              $score=0;
              $scorePercentage=0;
              $exam=Exam::findOrFail($examId);
              foreach($exam->Questions as $question){
                  if(isset($request->ans[$question->id])){
                      $studentrAns=$request->ans[$question->id];
                      static $rightAns;
                      $rightAns=$question->right_ans;
                      if($studentrAns==$rightAns){
                          $score+=1;
                      }
                  }
              }
              $pivotRow=$user->exams()->where('exam_id',$examId)->first();
              $pivotCreatedTime=$pivotRow->pivot->created_at;
              $timeMin=(Carbon::now())->diffInMinutes($pivotCreatedTime);

              if($timeMin>($exam->duration_min)*60){
                  $score=0;
              }

              $scorePercentage=($score/$exam->questions()->count())*100;
              $user->exams()->updateExistingPivot($examId,[
               'score'=> $scorePercentage,
               'time_min'=>$timeMin,
               'status'=>'closed'
              ]);
              $request->session()->flash('score', "you finshed exam successfuly with score :  $scorePercentage%");
              return redirect(url("/exam/$examId"));
    }
}
