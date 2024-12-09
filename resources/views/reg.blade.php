@extends('layouts.app')
@section('content')
<h1>Регистрация</h1>
    <form action="{{ route('reg.share') }}" method="POST">
        @csrf
        <label for="name">Имя:</label><br>
        <input type="text" name="name" required><br>
        <label for="email">Почта:</label><br>
        <input type="email" name="email" required><br>
        <label for="password">Пароль:</label><br>
        <input type="password" name="password" required><br>
        <label>Подтвердите пароль:</label><br>
        <input type="password" name="password_confirmation" required><br>
        <button type="success">Зарегистрироваться</button>
</form>
@endsection