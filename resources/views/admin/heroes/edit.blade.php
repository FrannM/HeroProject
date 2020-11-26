@extends('layouts.app')

@section('content')
    <h1>Modificar Héroe</h1>

    <form action="{{ route('admin.heroes.update', ['id' => $hero->id]) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $hero->name}}"
                   placeholder="Ingrese un nombre" required>
        </div>
        <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" name="hp" value="{{ $hero->hp}}"
                   placeholder="Ingrese los puntos de vida"
                   required>
        </div>
        <div class="form-group">
            <label for="atk">Ataque</label>
            <input type="number" class="form-control" id="atk" name="atk" value="{{ $hero->atk}}"
                   placeholder="Ingrese los puntos de ataque"
                   required>
        </div>
        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def" name="def" value="{{ $hero->def}}"
                   placeholder="Ingrese los puntos de defensa"
                   required>
        </div>
        <div class="form-group">
            <label for="luck">Suerte</label>
            <input type="number" class="form-control" id="luck" name="luck" value="{{ $hero->luck}}"
                   placeholder="Ingrese los puntos de suerte"
                   required>
        </div>

        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>

@endsection
