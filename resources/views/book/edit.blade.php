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
   <form action="/book/edit" method="post">
       {{ csrf_field() }}
       <input type="hidden" name="id" value="{{$form->id}}">
       <tr>
         <th>タイトル</th>
         <td>
           <input type="text" name="title" value="{{$form->title}}">
         </td>
       </tr>
       <tr>
         <th>紹介文</th>
         <td>
           <input type="text" name="text" value="{{$form->text}}">
         </td>
       </tr>
       <tr>
         <th>
         </th>
         <td>
           <input type="submit" value="send">
         </td>
       </tr>
   </form>
   </table>
@endsection
