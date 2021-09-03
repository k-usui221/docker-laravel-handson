<html>
<head>
    <title>Hello/Index</title>
    <style>
        body {font-size:16pt; color:#999;}
        h1 {    font-size:50pt; text-align:right; color:#f6f6f6;
            margin:-20px 0px -30px 0px; letter-spacing:-4pt;}
    </style>
</head>
<body>
    <h1>Blade/Index</h1>
    
    <p>&#064;forディレクティブの例</p>
    @foreach($cats as $cat)
        @if($loop->first)
            <p>※データ一覧</p><ul>
            <p>飼っている猫の数は{{$loop->count}}匹です</p><ul>
        @endif
        <li>No.{{$loop->iteration}} = {{$cat}}</li>
        @if($loop->last)
        </ul><p>-----ここまで</p>
        @endif
    @endforeach    

</body>
</html>