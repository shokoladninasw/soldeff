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
  
    
<h1>Регистрация</h1>
    <form action="{{ route('reg.share') }}" method="POST">
        @csrf
        {{-- <label for="name">Имя:</label><br> --}}
        <input type="text" name="name" required placeholder="Имя"><br>
        {{-- <label for="email">Почта:</label><br> --}}
        <input type="email" name="email" required placeholder="Почта"><br>
        {{-- <label for="password">Пароль:</label><br> --}}
        <input type="password" name="password"   placeholder="Пароль"required><br>
        {{-- <label>Подтвердите пароль:</label><br> --}}
        <input type="password" name="password_confirmation"  placeholder="Повторите пароль" required><br>
        <button type="success">Зарегистрироваться</button>
</form>


</body>
</html>

@endsection