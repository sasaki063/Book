@extends('layouts.app')

@section('content')

    @if (session('status'))
        {{ session('status') }}
    @endif
    <p>ユーザー一覧</p>
    <ul>
    @foreach ($users as $user)
      <li>{{ $user -> name }}</li>
    @endforeach
    </ul>
    <h1>マイページ</h1>
    <p>投稿した書籍</p>
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
            <a href="{{ url('book/'.$item->id.'/edit') }}">編集</a>
          </td>
         </tr>
        @endforeach
      </table>

      <p>いいねした本</p>

@endsection
