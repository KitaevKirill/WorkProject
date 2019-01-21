<?php

namespace App\Http\Controllers;

use App\Foo;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use TCG\Voyager\Models\post;
use App\Comment;
use App\Book;
use App\Services\Service;
use App\Repositories\UserRepository;
use App\Services\Language;

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

    public function servCont(Service $service)
    {
        dd($service);

//         $foo = new Foo('2');
////         $foo = Foo::key('1');
//
//        app()->singleton('foo', function () {
//            return new Foo('1');
//        });
//
//        app()->singleton('service', function () {
//            return new Service('dsdscds');
//        });

//        dd(app('App\Services\Service'));

        dd(app('foo'), app('foo'));

        // dd($service);
    }

    public function lang($la, Language $language)
    {
        dd($language);
    }

    public function repos(UserRepository $users)
    {
        dd($users);
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
