@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Enemigo</h1>

    <form action="{{ route('enemies.store') }}" method="post">

        @include('admin.enemies.form')

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection
