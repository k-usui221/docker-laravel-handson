@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文です</p>
    <p>必要なだけ記述できます。</p>
@endsection

@section('footer')
copyright 2021 katou.
@endsection