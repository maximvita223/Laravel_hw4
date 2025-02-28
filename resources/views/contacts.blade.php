@extends('layouts.default')

@section('content')
    <p>Адрес: {{ $address }}</p>
    <p>Индекс: {{ $post_code }}</p>
    @if ($email === '') 
        <p>Адрес электронной почты не указан</p>
    @else
        <p>Электронная почта: {{ $email }}</p>
    @endif
    <p>Телефон: {{ $phone }}</p>
@endsection
