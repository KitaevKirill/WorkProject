@extends('layouts.app')

@section('content')
    @foreach($book as $books)
        <li> {{ $books->text }}</li>
    @endforeach
@endsection