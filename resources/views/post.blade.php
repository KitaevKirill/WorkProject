@extends('layouts.app')

@section('content')
    <div class="container">
        {!!  $post[0]->body!!}


        <form method="post" action="/addComment">
            {{ csrf_field() }}

            <div>
                <textarea name="text" placeholder="text of comment"></textarea>
            </div>

            <div>
                <button type="submit">Add comment</button>
            </div>
        </form>
    </div>
    <hr>
    @foreach($comment as $comments)
        <li> {{ $comments->text }}</li>
    @endforeach
@endsection