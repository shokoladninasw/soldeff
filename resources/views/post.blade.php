@extends('layouts.app')

@section('content')
<a href="{{ route('forum') }}">Вернуться</a>
<h2>{{ $main->name }}</h2>
<p>ID пользователя: {{ $main->user_id }}<p>
<p>{{ $main->text }}</p>
<p>{{ $main->created_at }}</p>

@if(!$main->complait)
    <form action="{{ route('main.compl', $main->id) }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit">Это неадекватно</button>
    </form>
@else
    <span style="color: green;">Жалоба подана</span>
@endif

@if(Auth::check())
    <form action="{{ route('comment.add', $main->id) }}" method="POST">
        @csrf
        <div>
            <input name="body" placeholder="Ваш комментарий" required>
        </div>
        <button type="submit">Добавить комментарий</button>
    </form>
@else
    <p>Пожалуйста, <a href="{{ route('log') }}">войдите</a>, чтобы оставлять комментарии.</p>
@endif

@if($main->comments->isEmpty())
<p>Комментариев пока что нет</p>
@else
<h4>Комментарии:</h4>
<ul>
    @foreach($main->comments as $comment)
        <li>
            <strong>{{ $comment->author }}</strong>: {{ $comment->body }} <em>{{ $comment->created_at }}</em>
        </li>
    @endforeach
</ul>
@endif
@endsection