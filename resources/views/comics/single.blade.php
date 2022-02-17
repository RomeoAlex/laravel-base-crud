@extends('layouts.app')

@section('main_content')
    
    <h1>Titolo: {{$comic->title}}</h1>
    <h2>Serie: {{$comic->series}}</h2>
    
@endsection