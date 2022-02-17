@extends('layouts.app')

@section('main_content')
 <h1>Aggiungi un nuovo fumetto</h1>
    <form action="{{ route('comics.store')}}" method="post">
    @csrf
    @method('POST')
    <div>
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div>
        <label for="src" class="form-label">url</label>
        <input type="text" class="form-control" id="thumb" name="thumb">
    </div>
    <div>
        <label for="price" class="form-label">price</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    <div>
        <label for="series" class="form-label">Della serie</label>
        <input type="text" class="form-control" id="series" name="series">
    </div>
    <div>
        <label for="sale_date" class="form-label">in vendita da</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date">
    </div>
    <div>
        <label for="type" class="form-label">Tpo</label>
        <input type="text" class="form-control" id="type" name="type">
    </div>
    <div>
        <label for="description">descrizione</label>
        <textarea id="description" name="description" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="">SUBMIT</button>
    </form>
@endsection