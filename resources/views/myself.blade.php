@extends('layouts.app')
@section('content')
<h2>Мои посты</h2>
<ul>
    @foreach($mains as $main)
    <li><p>{{ $main->name }}</p>
    <p>{{ $main->text }}</p>
    <p>{{ $main->created_at }}</p></li>
    @endforeach
</ul>
@endsection