<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

@extends('layouts.layout')

@section('content')
<div class="wrapper user-details">
    <h1>Пользователь: {{ $user->name }}</h1>
    <p class="type">Имя - {{ $user->name }}</p>
    <p class="base">Email - {{ $user->email }}</p>

    <form action="/users/{{ $user->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Удалить пользователя</button>
    </form>
</div>
<a href="/pizzas" class="back"><- Назад к списку пользователей</a>
@endsection