@extends('layout')
@section('content')
<h1>Форма</h1>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<form method="POST" action="/form">
    @csrf
    <label>Имя: <input type="text" name="name"></label>
    @error('name') <p>{{ $message }}</p> @enderror

    <label>Email: <input type="email" name="email"></label>
    @error('email') <p>{{ $message }}</p> @enderror

    <button type="submit">Отправить</button>
</form>
@endsection
