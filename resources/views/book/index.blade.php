@extends('layouts.app')
@section('content')

<a href= "{{ route('book.create') }}">投稿</a>

  <table>
    <thead>
      <th>タイトル</th>
      <th>紹介文</th>
    </thead>
      @foreach ($items as $item)
       <tr>
        <td>
          <a href="{{ url('book/'.$item->id) }}">{{ $item -> title }}</a>
        </td>
        <td>{{ $item -> text }}</td>
        <td>
          <form action="{{ url('book/'.$item->id) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <button type="submit">削除</button>
        </td>
       </tr>
      @endforeach
  </table>

@endsection
