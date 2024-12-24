@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/forum.css">
</head>
<body>
    <style></style>

<h2>Наш форум</h2>
@if($mains->isEmpty())
<p>Постов нет</p>
@else
    <div class="forum">
  @foreach($mains as $main)  
    <ul class="post">
        <div class="up-text"> 
    <p class="name">{{ $main->name }}</p>
    <p  class="text">{{ $main->text }}</p></div>
    <div class="bottom-text"> <p  class="time">{{ $main->created_at }}</p>
    <p class="podrobn   "> <a href="{{ route('forum.post', $main->id) }}">Подробнее</a></p>
    @if(!$main->complait)
                    <form action="{{ route('main.compl', $main->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit">Это неадекватно</button>
                    </form>
                @else
                    <span style="color: #02BE02;">Жалоба подана</span>
                @endif

            </div>            </ul>
    @endforeach
</div>
@endif
{{ $mains->links() }}
@endsection



</body>
</html>