<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Soldeff</title>
    <link rel="stylesheet" href="css/layouts.css">
</head>
<body>
    


<div class="head" style="display: flex;">
    <ul style="display: flex; list-style: none;">

        <li><a href="{{ route('main') }}"><img src="img/logo.svg" alt="" width="100px" height="100px"></a> </li>
        <li><a class="site-name" href="{{ route('main') }}">Soldeff</a></li>
    </ul>
        <ul style="display: flex; list-style: none;">
        <li><a href="{{ route('main') }}">Главная</a></li>
        <li><a href="{{ route('forum') }}">Форум</a></li>
        <li><a href="{{ route('addit') }}">Дополнительно</a></li>
</ul>
@if(Auth::check())
<ul style="display: flex; list-style: none; margin-right: 0px;">
<li><a href="{{ route('poster') }}">Опубликовать</a></li>
<li><a href="{{ route('myself') }}">Мои посты</a></li>
<li> <style> .leave{ 
    width: 106px;
height: 30px;
margin: 0;
border-radius: 0;
border: none;

}
.leave button {
    width: 100%;
    height: 100%;
} </style><form class="leave" action="{{ route('logout') }}" method="POST">
    @csrf
<button type="success">Выйти</button>
</form></li>
</ul>
@else
<ul style="display: flex; list-style: none; margin-right: 0px;">
<li><a href="{{ route('reg') }}">Регистрация</a></li>
<li><a href="{{ route('log') }}">Вход</a></li>
</ul>
@endif
</div>
<main>
        @yield('content')
</main>


<footer>
    <ul class="footer-ul">  <li class="footer-li"> <div class="site-name"> Soldeff </div> </li>
   <li>  &#169; Soldeff 2024. <br>Все права защищены.</li>
    </ul>

    <ul>
    <li class="footer-li"> <a href="#">  правила сообщества</a>
    </li>
    <li class="footer-li"> <a href="#"> источники информации</a>
    </li>
    <li class="footer-li"> <a href="#"> доп. информация</a>
    </li>
    
</ul>
<ul class="footer-ul"> 
    <li class="footer-li"> <a href="#">о разработке</a>
    </li>
    <li class="footer-li"> <a href="#">дизайнеры и идея</a>
    </li>
    <li class="footer-li"> <a href="#">о конфиденциальности</a>
    </li>
</ul>
</footer>



</body>
</html>