@extends('layouts.app')
@section('content')

@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<table>
  <form action="/book/store" method="post">
  {{ csrf_field() }}
    <tr>
      <td>タイトル</td>
      <td>
        <input type="text" name="title" value="{{old('title')}}">
      </td>
    </tr>
    <tr>
      <td>紹介文</td>
      <td>
        <input type="text" name="text" value="{{old('text')}}">
      </td>
    </tr>
      <td>
        <input type="submit" value="send">
      </td>
  </form>
</table>

@endsection
