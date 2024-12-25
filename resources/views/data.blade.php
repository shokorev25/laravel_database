@extends('layout')
@section('content')
<h1>Сохраненные данные</h1>
<table>
    <thead>
        <tr>
            <th>Имя</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['email'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
