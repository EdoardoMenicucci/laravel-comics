@extends('layouts.layout')

@section('content')
   <h1>{{$fumetto['title']}}</h1> 
   <img src="{{$fumetto['thumb']}}" alt="">
   <p>{{$fumetto['description']}}</p>
   <p>Prezzo: {{$fumetto['price']}}</p>
@endsection