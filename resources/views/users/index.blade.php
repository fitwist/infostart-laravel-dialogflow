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

<div class="wrapper user-index"
<h1>Пользователи</h1>
    @foreach($users as $user)
        <div class="user-item">
            <h4><a href="/users/{{ $user->id }}">{{ $user->name }}</a></h4>
        </div>
    @endforeach
</div>

@endsection