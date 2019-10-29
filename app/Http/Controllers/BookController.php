<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
      $items = Book::all();
      return view('book.index', ['items' => $items]);
    }

    public function store(Request $request)
    {
      return view('book.store');
    }

    public function create(Request $request)
    {
     $book = new Book;
     $book->title = $request->title;
     $book->text = $request->text;

     $book->save();
     return redirect('/book');
    }

    public function edit(Request $request)
    {
      $book = Book::find($request->id);
      return view('book.edit', ['form' => $book]);
    }
}
