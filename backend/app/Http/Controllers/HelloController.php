<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;

class HelloController extends Controller
{
    public function index(Request $request){
        
        $msg = 'フォームを入力';

        return view('hello.index',compact('msg'));
    }

    public function post(HelloRequest $request){
               
        $msg = "正しく入力されました";

        return view('hello.index',compact('msg'));
    }
}
