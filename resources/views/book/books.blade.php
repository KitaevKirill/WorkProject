@extends('layouts.app')

@section('content')
    <a href="/books/create">Добавить книгу</a>
    @foreach($book as $books)
        <li><a href="/books/{{ $books->id }}">{{ $books->title }}</a></li>
    @endforeach
@endsection