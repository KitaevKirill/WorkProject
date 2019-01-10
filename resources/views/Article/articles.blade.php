@extends('layouts.app')

@section('content')
    <a href="/articles/create">Добавить статью</a>
    @foreach($article as $articles)
        <li><a href="/articles/{{ $articles->id }}">{{ $articles->title }}</a></li>
    @endforeach
@endsection