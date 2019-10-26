@extends('layouts.app')
@section('content')

@foreach ($items as $item)
{{ $item->title }}
{{ $item->text }}
@endforeach

@endsection
