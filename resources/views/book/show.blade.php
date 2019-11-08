@extends('layouts.app')
@section('content')

<h1>書籍</h1>
  <ul>
    <li>{{ $book -> title }}</li>
    <li>{{ $book -> text }}</li>
  </ul>

  <form method="POST" action="{{ route('comments.store') }}">
    {{ csrf_field() }}

    <input name="book_id" type="hidden" value="{{ $book->id }}">
    <textarea id="body" name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="4">{{ old('body') }}</textarea>

    @if ($errors->has('body'))
    {{ $errors->first('body') }}
    @endif

    <button type="submit">コメントする</button>
  </form>

  @foreach ($book->comments as $item)
  <table>
    <tr>
      <td>{{ $item -> id }}</td>
      <td>{{ $item -> body }}</td>
      <td>{{ $item -> user_id }}</td>
      <td>
        <form action="{{ url('comments/'.$item->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit">削除</button>
        </form>
      </td>
    </tr>
  </table>
  @endforeach


@endsection
