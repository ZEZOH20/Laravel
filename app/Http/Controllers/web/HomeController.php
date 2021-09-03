<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\cat;
class HomeController extends Controller
{
    function  index(){
        return view('web.home.index');
    }
}
