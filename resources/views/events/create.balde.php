    @extends('layouts.main')

    @section('title', 'Criar Reserva')

    @section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie sua reserva </h1>
        <form action="/events" method="POST">
        <div class="form-group"></div>
        <label for="title">Descrição:</label>
        <textarea name="description" id="description" class="form-control" placeholder="Descrição do Evento"></textarea>
    </div>
    <div class="form-group"></div>
        <label for="title">Sala:</label>
        <input type="text" class="form-control" id="room" name="room" placeholder="Sala da Reserva">
    </div>
    <div class="form-group"></div>
        <label for="title">Ar Condicionado:</label>
       <select name="equipment0" id="equipment0" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
       </select>
    </div>
    <div class="form-group"></div>
        <label for="title">Adptador Apple:</label>
        <select name="equipment1" id="equipment1" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
       </select>
    </div>
    <div class="form-group"></div>
        <label for="title">Adpatador Comum:</label>
        <select name="equipment2" id="equipment2" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
       </select>
    </div>
    <div class="form-group"></div>
        <label for="title">Projetor:</label>
        <select name="equipment3" id="equipment3" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
       </select>
    </div>
    <div class="form-group"></div>
        <label for="title">Som:</label>
        <select name="equipment4" id="equipment4" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
       </select>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar">
</form>
    </div>
    @endsection
