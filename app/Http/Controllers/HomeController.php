<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;
use Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $user = Auth::id();
      $query = Book::query();
      $query->where('user_id',$user);
      $items = $query->get();

      $users = User::all();
      return view('/home', ['items' => $items, 'users' => $users]);
    }
}
