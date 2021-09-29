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
<div class="wrapper create-user">
    <h1>Новый пользователь</h1>
    <form action = "/users" method = "POST">
        @csrf
        <label for="name">Имя:</label>
        <input for="text" id = "name" name="name">

        <label for="email">email:</label>
        <input for="text" id = "email" name="email">

        <input type="submit" value="Создать">
    </form>
</div>
@endsection