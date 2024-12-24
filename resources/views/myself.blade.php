@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/forum.css">
</head>
<body>
    

<h2>Мои посты</h2>
@if($mains->isEmpty())
<p>Постов нет</p>
@else


<div class="forum">
    @foreach($mains as $main)
    <ul class="post">
    <li><p class="name">{{ $main->name }}</p>
    <p  class="text">{{ $main->text }}</p>
    <p  class="time">{{ $main->created_at }}</p>
    </ul>
    @endforeach


{{-- <ul>
    @foreach($mains as $main)
    <li><p>{{ $main->name }}</p>
    <p>{{ $main->text }}</p>
    <p>{{ $main->created_at }}</p></li>
    @endforeach
</ul> --}}

@endif
@endsection


</body>
</html>