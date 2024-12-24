@extends('layouts.app')

@section('content')


<head>
    <link rel="stylesheet" href="../css/post.css">
   <link rel="stylesheet" href="../css/layouts.css">
   <link rel="stylesheet" href="../css/index.css">
</head>
<body>
<style> p {
    word-wrap: break-word; 
}  </style>

<a class="comeback" href="{{ route('forum') }}">Вернуться</a>
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
    <span style="color: #02BE02;">Жалоба подана</span>
@endif

@if(Auth::check())
    <form action="{{ route('comment.add', $main->id) }}" method="POST">
        @csrf
        <div>
            <textarea name="body" placeholder="Ваш комментарий" required> </textarea>
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
  
</body>
</html>