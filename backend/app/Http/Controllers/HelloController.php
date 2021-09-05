<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request){
        
        $data = $request->data;

        return view('hello.index',compact('data'));
    }

    public function post(Request $request){
        
        return view('hello.index',['msg'=>$request->msg]);
    }
}
