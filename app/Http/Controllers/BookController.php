<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Book;
use Auth;

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
      $book->user_id = Auth::id();
      $book->save();
      return redirect('book');
    }

    public function show(Book $book)
    {
      return view('book.show', ['book' => $book]);
    }

    public function edit(Book $book)
    {
      return view('book.edit', ['book' => $book]);
    }

    public function update(Request $request, Book $book)
    {
        $book->title = $request->title;
        $book->text = $request->text;
        $book->save();
        return redirect('book');
    }

    public function destroy($id)
    {
      $book = Book::find($id);
      $book->comments()->delete();
      $book->delete();

      return redirect('book');
    }
}
