<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
      $items = Book::all();
      return view('book.index', ['items' => $items]);
    }

    public function create()
    {
      return view('book.create');
    }

    public function store(Request $request)
    {
      $book = new Book;
      $book->title = $request->title;
      $book->text = $request->text;
      $book->save();
      return redirect('book');
    }

    public function show($id)
    {
        //
    }

    public function edit(Book $book)
    {
      return view('book.edit', ['book' => $book]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
