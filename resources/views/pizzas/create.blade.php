<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Заявка</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Заявка на абонемент</h1>
    <form action = "/pizzas" method = "POST">
        @csrf
        <label for="name">Имя:</label>
        <input for="text" id = "name" name="name">

        <label for="type">Телефон:</label>
        <input for="text" id = "type" name="type">

        <label for="base">Компания:</label>
        <input for="text" id = "base" name="base">
        
        <label for="base">Должность:</label>
        <input for="text" id = "toppings" name="toppings">

        <input type="submit" value="Отправить">
    </form>
</div>
@endsection