@extends('layouts.app')
@section('content')
<h2>Опубликуйте статью</h2>
<form action="{{ route('forum.share') }}" method="POST">
    @csrf
    <label>Название поста</label><br>
    <input type="text" name="name" id="name" required><br>
    <label>Текст</label><br>
    <input type="text" name="text" id="text" required><br>
    <button type="success">Отправить</button>
</form>
@endsection