@extends('layouts.app')

@section('content')
    <div class="row-3">

        <h1>Lista de Enemigos</h1>
    </div>

    <div class="row-3">
        <a href="{{ route('enemy.create') }}" class=" btn btn-primary mb-2 mt-2">Crear Enemigo</a>
    </div>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">HP</th>
            <th scope="col">Ataque</th>
            <th scope="col">Defensa</th>
            <th scope="col">Suerte</th>
            <th scope="col">Monedas</th>
            <th scope="col">Experiencia</th>
            <th>
                <div class="col ml-4">
                    Acciones
                </div>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($enemies as $enemy)

            <tr>
                <th scope="row">{{ $enemy->id }}</th>
                <td>{{$enemy->name }}</td>
                <td>{{$enemy->hp }}</td>
                <td>{{$enemy->atk }}</td>
                <td>{{$enemy->def }}</td>
                <td>{{$enemy->luck }}</td>
                <td>{{$enemy->coins }}</td>
                <td>{{$enemy->xp }}</td>
                <td>
                    <div class="row">
                        <div class="col-auto">
                            <a href="{{ route('enemy.edit', $enemy->id) }}" class=" btn btn-warning">Editar</a>
                        </div>

                        <div class="col-auto">
                            <form action="{{ route('enemy.destroy', $enemy->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
