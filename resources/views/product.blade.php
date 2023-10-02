@extends('layouts.main')

@section('title', 'Reserva Unifil')

@section('content')

    @if($id != null)
    <p>Exibindo produto id: {{ $id }}</p>
    @endif

@endsection
