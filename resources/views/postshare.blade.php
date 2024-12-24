@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reg.css">
</head>
<body>
    <style> form {
        height: 300px;
        margin-bottom: 150px
    } 
    h2 {font-family: Anonymous Pro;
font-size: 2.8rem;
font-weight: 400;
line-height: 56px;
text-align: left;
text-underline-position: from-font;
text-decoration-skip-ink: none;


    }</style>
<h2>Опубликуйте статью</h2>
<form action="{{ route('forum.share') }}" method="POST">
    @csrf
    {{-- <label>Название поста</label><br> --}}
    <input type="text" name="name" id="name" required placeholder="Название поста"><br>
    {{-- <label>Текст</label><br> --}}
    <input type="text" name="text" id="text" required placeholder="Текст"><br>
    <button type="success">Отправить</button>
</form>
@endsection


</body>
</html>