@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文です</p>
    <table>
        @foreach($data as $item)
            <tr>
                <th>{{$item['name']}}</th>
                <td>
                    {{$item['mail']}}
                </td>
            </tr>
        @endforeach
    </table>

@endsection

@section('footer')
copyright 2021 katou.
@endsection