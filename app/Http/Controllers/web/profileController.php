<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class profileController extends Controller
{
   function show(){
       $data['exams']=Auth::user()->exams;
       return view("web.home.profile")->with($data);
   }
}
