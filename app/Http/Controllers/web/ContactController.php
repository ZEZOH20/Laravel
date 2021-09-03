<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    function show(){
        $data['settings']=Setting::first(['email','phone']);
        return view('web.home.contact',$data);
    }
    function send(Request $request ){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject'=>'required|string|max:255',
            'bodyMessage'=>'required',
        ]);
        if($validator->fails()){
           $errors=$validator->errors();
           return redirect(url('/contact'))->withErrors($errors);
        }
        Message::create([
            'name' => $request->name,
            'email' =>  $request->email,
            'subject'=> $request->subject,
            'bodyMessage'=> $request->bodyMessage,
       ]);
       $request->session()->put('success','Successful Operation');
       return back();
    }
}
