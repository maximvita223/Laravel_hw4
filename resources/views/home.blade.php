@extends('layouts.default')

@section('content')
    <p>Имя: {{ $name }}</p>
    @if ($age <= 18) 
        <p>Возраст слишком мал</p>
    @else
        <p>Возраст: {{ $age }}</p>
    @endif
    <p>Должность: {{ $position }}</p>
    <p>Адрес: {{ $address }}</p>
@endsection
