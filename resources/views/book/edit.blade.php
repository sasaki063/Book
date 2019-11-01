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
     <form action="{{ url('book/'.$book->id) }}" method="post">
     {{ csrf_field() }}
     {{ method_field('PUT') }}
       <tr>
         <td>タイトル</td>
         <td>
           <input type="text" name="title" value="{{$book->title}}">
         </td>
       </tr>
       <tr>
         <td>紹介文</td>
         <td>
           <input type="text" name="text" value="{{$book->text}}">
         </td>
       </tr>
         <td>
           <input type="submit" value="send">
         </td>
     </form>
   </table>
@endsection
