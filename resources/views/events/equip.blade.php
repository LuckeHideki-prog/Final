@extends('layouts.main')

@section('title', 'Equipamentos')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Gerenciamento de Equipamentos</h1>
    <form action="/events" method="POST">
    <div class="form-group"></div>
    <label for="title">Nome do Equipamento</label>
    <input type="text" class="form-control" id="room" name="room" placeholder="Nome do Equipamento">
</div>
<div class="form-group"></div>
    <label for="title">Categoria</label>
    <input type="text" class="form-control" id="room" name="room" placeholder="Categoria">
</div>
</div>
<div class="form-group"></div>
    <label for="title">Marca</label>
    <input type="text" class="form-control" id="room" name="room" placeholder="Marca">
</div>
<input type="submit" class="btn btn-primary" value="Registar">
</form>
</div>

@endsection
