@extends('layouts.app')

@section('content')
    <div class="container">
       Здесь будут проходить тесты<br>

        {{ $comment[0]->text }} <br>
        <hr>
        Текст статьи 1: {!!  $post[0]->body!!}
        {!!  $post[1]->id!!}
        <hr>

        Текст статьи 2: {!!  $post[1]->body!!}
        <hr>

        Текст статьи 3: {!!  $post[2]->body!!}
        <hr>

        Текст статьи 4: {!!  $post[3]->body!!}
        <hr>

        Текст статьи 5: {!!  $post[4]->body!!}
        <hr>

    </div>

 @foreach($post as $posts)
  <li> {{ $posts->title }}</li>
 @endforeach
@endsection