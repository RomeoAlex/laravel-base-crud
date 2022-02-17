@extends('layouts.app')
@section('main_content')
<h1>Lista fumetti</h1>
@foreach ($comics as $comic)
    
    <div>
        <h4>Titolo: </h4>
        <a href="{{ route('comics.show', ['comic' => $comic->id])}}">{{$comic->title}}</a>
    </div>  
@endforeach

@endsection