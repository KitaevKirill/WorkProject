<?php

namespace App\Http\Controllers;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use TCG\Voyager\Models\post;
use App\Comment;
use App\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function test()
    {
        $comment = Comment::all();
        $post = post::all();

        return view('test', compact('comment', 'post')); //['comment' => $comment, 'post' => $post]);
    }


    public function servCont($id)
    {
        $book = Book::find($id);

        return view('servCont', compact('book'));
    }

    public function fileSys()//Filesystem $file)
    {
        app()->singleton('book', function () {
            return new \App\Book;
        });

        app()->bind('comment', function () {
            return new \App\Comment;
        });

        dd(App('book'), App('book'), App('comment'));

        //dd($file);
    }

    public function homeIndex()
    {
        return view('index.index_blog'//, ['wat' => '13wat']
        );
    }
}
