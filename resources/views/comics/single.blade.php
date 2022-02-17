@extends('layouts.app')

@section('main_content')
    
    <h1>Titolo: {{$comic->title}}</h1>
    <h2>Serie: {{$comic->series}}</h2>
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    <h2>{{$comic->price}}</h2>
    <h3>{{$comic->series}}</h3>
    <h3>{{$comic->type}}</h3>
    <h3>{{$comic->sale_date}}</h3>
    <p>{{$comic->description}}</p>
@endsection