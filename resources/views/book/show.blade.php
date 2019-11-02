@extends('layouts.app')
@section('content')

<h1>書籍</h1>
  <ul>
    <li>{{ $book -> title }}</li>
    <li>{{ $book -> text }}</li>
  </ul>

@endsection
