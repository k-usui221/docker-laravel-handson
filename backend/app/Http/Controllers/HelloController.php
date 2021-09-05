<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        
        $message = 'ここまでできた';

        return view('hello.index',compact('message'));
    }

    public function post(Request $request){
        
        return view('hello.index',['msg'=>$request->msg]);
    }
}
