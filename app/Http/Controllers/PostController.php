<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\post;
use App\Comment;

class PostController extends Controller
{
    public function view()
    {
        $comment = Comment::all();
        $post = post::all();

        return view('post', ['comment' => $comment, 'post' => $post]);
    }

//    public function createComment()
//    {
//        return view('create');
//    }

    public function store()
    {
        $post = post::all()[0];

        $comment = new Comment();
        $comment->author_id = 1;
        $comment->article_id =$post->id;
        $comment->text = request('text');

        $comment->save();

        return redirect('/post');
    }
}
