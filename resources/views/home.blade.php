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
    <h1>HomePage </h1><form action="about"><button type="submit">Go About</button></form>
    <ul>
    @foreach ($data as $element)
            <li><h3>{{ $element['title'] }}</h3></li>
            <p>{{$element['description']}}</p>
            <img src="{{$element['thumb']}}" alt="">
            <p>{{$element['price']}}</p>
            <hr>
    @endforeach
    </ul>
</body>
</html>