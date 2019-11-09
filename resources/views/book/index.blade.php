@extends('layouts.app')
@section('content')

<a href= "{{ route('book.create') }}">投稿</a>

  <table>
    <thead>
      <th>ID</td>
      <th>タイトル</th>
      <th>紹介文</th>
      <th>投稿者</th>
    </thead>
      @foreach ($items as $item)
       <tr>
         <td>{{ $item -> id }}</td>
        <td>
          <a href="{{ url('book/'.$item->id) }}">{{ $item -> title }}</a>
        </td>
        <td>{{ $item -> text }}</td>
        <td>{{ $item -> user_id }}</td>
        <td>
          <form action="{{ url('book/'.$item->id) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <button type="submit">削除</button>
        </form>
        </td>
       </tr>
      @endforeach
  </table>

@endsection
