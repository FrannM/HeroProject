@extends('layouts.app')

@section('content')
    <div class="row-3">

        <h1>Lista de Héroes</h1>
    </div>

    <div class="row-3">
        <a href="{{ route('admin.heroes.create') }}" class=" btn btn-primary mb-2 mt-2">Crear Héroe</a>
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
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($heroes as $hero)

            <tr>
                <th scope="row">{{$hero->id }}</th>
                <td>{{$hero->name }}</td>
                <td>{{$hero->hp }}</td>
                <td>{{$hero->atk }}</td>
                <td>{{$hero->def }}</td>
                <td>{{$hero->luck }}</td>
                <td>{{$hero->coins }}</td>
                <td>{{$hero->xp }}</td>
                <td>
                    <a href="{{ route('admin.heroes.edit', ['id' => $hero->id]) }}" class=" btn btn-warning">Modificar</a>

                    <a href="{{ route('admin.heroes') }}" class=" btn btn-danger">Eliminar</a>

                </td>
            </tr>

        @endforeach
        </tbody>
    </table>


@endsection
