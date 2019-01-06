@extends('layouts.app')

@section('content')
    <a href="/books">Список</a><br>
    <a href="/books/create">Добавить книгу</a><br>
    <table border="1">
        <tr>
            <td>Title: {{ $book->title }} </td>
            <td>Author: {{ $book->author }}</td>
        </tr>
    </table>
    <a href="/books/{{ ($book->id)-1 }}">&lt;&lt;&lt;</a>   <a href="/books/{{ ($book->id)+1 }}">&gt;&gt;&gt;</a>


@endsection