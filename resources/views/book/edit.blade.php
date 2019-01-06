@extends('layouts.app')

@section('content')
    <form method="POST" action="/books/{{$book->id}}">
        {{method_field('PATCH')}}
        {{csrf_field()}}

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{$book->title}}">
            </div>
        </div>
        <br>

        <div>
            <label for="author">Author</label>
            <div>
                <input type="text" class="input" name="author" value="{{$book->author}}"><br>
            </div>
        </div>

        <div>
            <br>
            <button type="submit">Update book</button>
        </div>
    </form>

    <form method="POST" action="/books/{{$book->id}}">
        @method('DELETE')
        @csrf

        <div>
            <br>
            <button type="submit">Delete book</button>
        </div>
    </form>
@endsection