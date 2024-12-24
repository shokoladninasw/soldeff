@extends('layouts.app')
@section('content')

<style> h2 { 
    margin: 0 auto;
    padding: 20px 0;
} </style>
<h2>Админка</h2>
<h3>Посты с жалобами</h3>
@if($mains->isEmpty())
<p>Пока что нет жалоб</p>
@else

<ul>
    @foreach($mains as $main)
    <li><p>{{ $main->name }}</p>
        <p>{{ $main->text }}</p>
        <p>{{ $main->created_at }}</p>
        <form action="{{ route('admin.del', $main) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="subbmit">Удалить</button>
</form>
    @endforeach
</ul>
@endif
@endsection