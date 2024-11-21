@extends('layouts.app')
@section('content')
<h2>Наш форум</h2>
<ul>
    @foreach($mains as $main)
    <li><p>{{ $main->name }}</p>
    <p>{{ $main->text }}</p>
    <p>{{ $main->created_at }}</p>
    <p><a href="{{ route('forum.post', $main->id) }}">Подробнее</a></p>
    @if(!$main->complait)
                    <form action="{{ route('main.compl', $main->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit">Это неадекватно</button>
                    </form>
                @else
                    <span style="color: green;">Жалоба подана</span>
                @endif
</li>
    @endforeach
</ul>
@endsection