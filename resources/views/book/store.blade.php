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
      <td>title:
        <input type="text" name="title" value="{{old('title')}}">
      </td>

      <td>
        text:<input type="text" name="text" value="{{old('text')}}">
      </td>
      <td>
        <input type="submit" value="send">
      </td>
    </tr>
  </form>
</table>

@endsection
