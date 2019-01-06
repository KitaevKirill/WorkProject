<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::all();

        return view('book.books', ['book' => $book]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->middleware('auth');

        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store() //Request $request)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'author' => 'required'
        ]);

        $book = new Book();

        $book->title = request('title');
        $book->author = request('author');

        $book->save();

        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('book.view', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Book $book
     * @return \Illuminate\Http\Response
     */
    public function update(Book $book)
    {
        $book->title = request('title');
        $book->author = request('author');

        $book->save();

        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book $book
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect('/books');
    }
}
