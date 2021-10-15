<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\cat;
class CatController extends Controller
{
    function show($id){
        $data['cat']=Cat::findOrFail($id);
        $data['allCat']=Cat::active()->get();
        $data['skills']=$data['cat']->skills()->active()->paginate(3);
        return view('web.home.cat',$data);
    }
}
