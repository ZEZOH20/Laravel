<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
class ExamController extends Controller
{
    function show($id){
        $data['exam']=Exam::findOrFail($id);
        return view("web.home.exam")->with($data);
    }
    function Questions($id){
        $data['exam']=Exam::findOrFail($id);
        return view("web.home.exam_questions")->with($data);
    }
}
