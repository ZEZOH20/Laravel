<?php

namespace App\Http\Controllers\admin;
Use Exception;
use App\Http\Controllers\Controller;
use App\Models\Cat;
use Illuminate\Http\Request;
use Psy\ExecutionLoopClosure;

class CatController extends Controller
{
    function index(){
        $data['cats']=Cat::paginate(3);
        return view('admin.cats.index')->with($data);
    }

    function store(Request $request){
          $request->validate([
            'name_en' => 'required|string|max:50',
            'name_ar' => 'required|string|max:50',
        ]);
       try{
        Cat::create([
            'name'=>json_encode([
                'ar'=>$request->name_ar,
                'en'=>$request->name_en,
            ])
        ]);
       }
     catch(Exception $e){

        //throw new Exception('Can\'t Add Category', 0, $e);
        return back()->withError($e->getMessage());
     }
        $msg='Add Category are Succeeded';
        $request->session()->flash('msg',$msg);
        return back();
    }

    function active(Cat $cat){
       $cat->update([
        'active'=>!$cat->active,
       ]);
       return back();
    }

    function delete(Cat $cat,Request $request){
        try{
            $cat->delete();
            $msg='Category deleted successfully';
        }
        catch(Exception $e){
            $msg='Category isn\'t deleted this Category have skills';
        }
        $request->session()->flash('msg',$msg);
       return back();
    }

    function update(Request $request){
         $request->validate([
            'id'=>'exists:cats,id|required',
            'name_en' => 'required|string|max:50',
            'name_ar' => 'required|string|max:50',
        ]);
        $cat=Cat::findOrFail($request->id);
        $cat->update([
            'name'=>json_encode([
                'ar'=>$request->name_ar,
                'en'=>$request->name_en,
            ]),
        ]);
        $request->session()->flash('msg','Category updated successfully');
       return back();
    }
}


