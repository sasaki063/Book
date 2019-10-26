@extends('layouts.app')
@section('content')

  <table>
    <thead>
      <th>タイトル</th>
      <th>紹介文</th>
    </thead>
      @foreach ($items as $item)
       <tr>
        <td>{{ $item -> title }}</td>
        <td>{{ $item -> text }}</td>
       </tr>
      @endforeach
  </table>
  
@endsection
