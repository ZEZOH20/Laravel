<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\cat;
class CatController extends Controller
{
    function show($id){
        $data['cat']=Cat::findOrFail($id);
        $data['allCat']=Cat::get();
        $data['skills']=$data['cat']->skills()->paginate(3);
        return view('web.home.cat',$data);
    }
}
