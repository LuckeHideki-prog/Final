@extends('layouts.main')

@section('title', 'Controle de Salas')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Gerenciamento de Salas</h1>
    <form action="/events" method="POST">
    <div class="form-group"></div>
    <label for="title">Nome da Sala:</label>
    <textarea name="description" id="description" class="form-control" placeholder="Nome da Sala que será registrada "></textarea>
</div>
<div class="form-group"></div>
    <label for="title">Campus:</label>
    <input type="text" class="form-control" id="room" name="room" placeholder="Campus onde se econtra a sala">
</div>
</div>
<input type="submit" class="btn btn-primary" value="Registar">
</form>
</div>

@endsection
