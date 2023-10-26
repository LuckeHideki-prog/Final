@extends('layouts.main')

@section('title', 'Reserva Unifil')

@section('content')

<div id="search-container" class="col-md12">
    <h1>Bem vindo a pagina de login do Reserva Unifil</h1>
    <form action="">
        <input type="text" id="search" name="search" class="from--control" placeholder="procurar">
    </form>
</div>

    <a href="/login/google">Login with Google</a>

    <i class="fa-brands fa-google"></i>

@endsection
