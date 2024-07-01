@extends('layouts.layout')


@section('content')
<ul>
    @foreach ($data as $index => $element)
            <a href="{{ route('fumetto', ['index' => $index]) }}"> <li><h3>{{ $element['title'] }}</h3></li></a>
            <p>{{$element['description']}}</p>
            <img src="{{$element['thumb']}}" alt="">
            <p>{{$element['price']}}</p>
            <hr>
    @endforeach
</ul>    
@endsection
