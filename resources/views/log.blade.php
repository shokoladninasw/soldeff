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
    
}
     
</style>
<h1>Вход</h1>
    <form action="{{ route('log.share') }}" method="POST">
        @csrf
        {{-- <label for="email">Почта:</label><br> --}}
        <input type="email" name="email" required placeholder="Почта"><br>
        {{-- <label for="password">Пароль:</label><br> --}}
        <input type="password" name="password" required placeholder="Пароль"><br>
        <button type="success">Войти</button>
</form>


@endsection
</body>
</html>
