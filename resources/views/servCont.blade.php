@extends('layouts.app')

@section('content')
    <table border="1">
        <tr>
            <td>Title: {{ $book->title }} </td>
            <td>Author: {{ $book->author }}</td>
        </tr>
    </table>
@endsection