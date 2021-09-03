<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        
        $cats = ['michel','mi','mu','me'];

        return view('hello.index',compact('cats'));
    }

    public function post(Request $request){
        
        return view('hello.index',['msg'=>$request->msg]);
    }
}
