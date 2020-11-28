@extends('layouts.app')

@section('content')
    <h1>Editar Enemigo - {{ $enemy->name }}</h1>

    <form action="{{ route('enemy.update', $enemy->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $enemy->name }}" placeholder="Ingrese un nombre" required>
        </div>
        <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" name="hp" value="{{ $enemy->hp }}" placeholder="Ingrese los puntos de vida" required>
        </div>
        <div class="form-group">
            <label for="atk">Ataque</label>
            <input type="number" class="form-control" id="atk" name="atk" value="{{ $enemy->atk }}" placeholder="Ingrese los puntos de ataque" required>
        </div>
        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def" name="def" value="{{ $enemy->def }}" placeholder="Ingrese los puntos de defensa" required>
        </div>
        <div class="form-group">
            <label for="luck">Suerte</label>
            <input type="number" class="form-control" id="luck" name="luck" value="{{ $enemy->luck }}" placeholder="Ingrese los puntos de suerte" required>
        </div>
        <div class="form-group">
            <label for="luck">Monedas</label>
            <input type="number" class="form-control" id="coins" name="coins" value="{{ $enemy->coins }}" placeholder="Ingrese la cantidad de monedas" required>
        </div>
        <div class="form-group">
            <label for="luck">Experiencia</label>
            <input type="number" class="form-control" id="xp" name="xp" value="{{ $enemy->xp }}" placeholder="Ingrese los puntos de experiencia" required>
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

@endsection
