@extends('layouts.app')
@section('content')
<h2>Мои посты</h2>
@if($mains->isEmpty())
<p>Постов нет</p>
@else
<ul>
    @foreach($mains as $main)
    <li><p>{{ $main->name }}</p>
    <p>{{ $main->text }}</p>
    <p>{{ $main->created_at }}</p></li>
    @endforeach
</ul>
@endif
@endsection