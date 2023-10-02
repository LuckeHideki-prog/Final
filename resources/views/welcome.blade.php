@extends('layouts.main')

@section('title', 'Reserva Unifil')

@section('content')


    <h1>HUE</h1>
    @if (10 > 15)
        <p>A condição é true</p>
    @endif

    <p>{{ $nome }}</p>

    @if ($nome == 'Pedro')
        <p>O nome é Pedro </p>
    @elseif($nome == 'Lucas')
        <p>O nome é {{ $nome }} e ele tem {{ $idade }} </p>
    @else
        <p>O nome não é Pedro </p>
    @endif

    @for ($i = 0; $i < count($arr); $i++)
        <p> {{ $arr[$i] }} - {{ $i }} </p>
        @if ($i == 2)
            <p>O i é 2</p>
        @endif
    @endfor

    @php
        $name = 'Nathalia';
        echo $name;
    @endphp

@endsection
