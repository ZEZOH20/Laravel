<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LangController extends Controller
{
 function changeLang($lang,Request $Request){
    $langArray=['AR','EN'];
    if(!in_array($lang, $langArray)){
        $lang ='EN';
    }
    $Request->session()->put('lang',$lang);

     return back();
 }

}
