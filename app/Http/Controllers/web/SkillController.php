<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Skill;
class SkillController extends Controller
{
    function show($id){
        $data['skill']=Skill::findOrFail($id);
        $data['exams']=$data['skill']->exams()->active()->paginate(3);
        return view('web.home.skill',$data);
    }
}
