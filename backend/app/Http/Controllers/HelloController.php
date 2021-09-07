<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use App\Models\People;


class HelloController extends Controller
{
    public function index(Request $request){
        
        $items = People::all();

        return view('hello.index',['items' => $items]);
    }

    public function post(HelloRequest $request){
               
        $msg = "正しく入力されました";

        return view('hello.index',compact('msg'));
    }
}
