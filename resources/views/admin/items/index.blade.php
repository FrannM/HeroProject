@extends('layouts.app')

@section('content')
    <div class="row-3">

        <h1>Lista de Items</h1>
    </div>

    <div class="row-3">
        <a href="{{ route('items.create') }}" class=" btn btn-primary mb-2 mt-2">Crear Item</a>
    </div>
    <div class="row">


        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">HP</th>
                <th scope="col">Ataque</th>
                <th scope="col">Defensa</th>
                <th scope="col">Suerte</th>
                <th scope="col">Precio</th>
                <th>
                    <div class="col ml-4">
                        Acciones
                    </div>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{$item->name }}</td>
                    <td>{{$item->hp }}</td>
                    <td>{{$item->atk }}</td>
                    <td>{{$item->def }}</td>
                    <td>{{$item->luck }}</td>
                    <td>{{$item->cost }}</td>
                    <td>
                        <div class="row">
                            <div class="col-auto">
                                <a href="{{ route('items.edit', $item->id) }}" class=" btn btn-warning">Editar</a>
                            </div>
                            <div class="col-auto">
                                <form action="{{ route('items.destroy', $item->id) }}" method="POST">
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
    </div>


@endsection
