@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="/books">
            {{ csrf_field() }}

            <div>
                <textarea name="title" placeholder="title" required></textarea>
            </div>

            <div>
                <textarea name="author" placeholder="author" required></textarea>
            </div>

            <div>
                <button type="submit">Add book</button>
            </div>
        </form>
    </div>
@endsection