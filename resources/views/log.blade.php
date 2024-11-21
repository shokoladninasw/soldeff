@extends('layouts.app')
@section('content')
<h1>Вход</h1>
    <form action="{{ route('log.share') }}" method="POST">
        @csrf
        <label for="email">Почта:</label><br>
        <input type="email" name="email" required><br>
        <label for="password">Пароль:</label><br>
        <input type="password" name="password" required><br>
        <button type="success">Войти</button>
</form>
@endsection