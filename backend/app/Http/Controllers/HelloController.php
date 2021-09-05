<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request){
        
        $msg = 'フォームを入力';

        return view('hello.index',compact('msg'));
    }

    public function post(Request $request){
       
        $validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];

        $this->validate($request,$validate_rule);

        $msg = "正しく入力されました";

        return view('hello.index',compact('msg'));
    }
}
