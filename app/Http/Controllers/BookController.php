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
}
