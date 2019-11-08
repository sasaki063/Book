<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
      $params = $request->validate([
        'book_id' => 'required|exists:books,id',
        'body' => 'required|max:2000',
      ]);

      $book = Book::findOrFail($params['book_id']);

      $comment = new Comment;
      $comment->book_id = $request->book_id;
      $comment->body = $request->body;
      $comment->save();

      return redirect()->route('book.show', ['book' => $book]);
    }

    public function destroy(Comment $comment)
    {
      $book = $comment->book_id;
      $comment->delete();
      
      return redirect()->route('book.show', ['book' => $book]);
    }
}
