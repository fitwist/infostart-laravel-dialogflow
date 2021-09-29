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
<div class="wrapper pizza-details">
    <h1>Заявка на абонемент: {{ $pizza->name }}</h1>
    <p class="type">Телефон - {{ $pizza->type }}</p>
    <p class="base">Компания - {{ $pizza->base }}</p>
    <p class = "toppings">Должность – {{ $pizza->toppings }}</p>

    <form action="/pizzas/{{ $pizza->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Закрыть заявку</button>
    </form>
</div>
<a href="/pizzas" class="back"><- Назад к списку заявок</a>
@endsection