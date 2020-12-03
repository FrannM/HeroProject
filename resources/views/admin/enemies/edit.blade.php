@extends('layouts.app')

@section('content')
    <h1>Editar Enemigo - {{ $enemy->name }}</h1>

    <form action="{{ route('enemies.update', $enemy->id) }}" method="post">

        @method('PUT')
        @include('admin.enemies.form')

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

@endsection
