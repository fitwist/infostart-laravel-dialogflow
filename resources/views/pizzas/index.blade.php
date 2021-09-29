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

<div class="wrapper pizza-index">
<h1>Заявки</h1>
    @foreach($pizzas as $pizza)
        <div class="pizza-item">
            <h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
        </div>
    @endforeach
</div>

@endsection