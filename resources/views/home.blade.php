<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>HomePage di {{$developer['nome']}}</h1>
    <ul>
        @foreach ($developer as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
</body>
</html>