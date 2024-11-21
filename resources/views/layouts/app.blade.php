<div class="head" style="display: flex;">
    <ul style="display: flex; list-style: none;">
        <li><a href="{{ route('main') }}">Главная</a></li>
        <li><a href="{{ route('forum') }}">Форум</a></li>
        <li><a href="{{ route('addit') }}">Дополнительно</a></li>
</ul>
@if(Auth::check())
<ul style="display: flex; list-style: none; margin-right: 0px;">
<li><a href="{{ route('poster') }}">Опубликовать</a></li>
<li><a href="{{ route('myself') }}">Мои посты</a></li>
<li><form action="{{ route('logout') }}" method="POST">
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