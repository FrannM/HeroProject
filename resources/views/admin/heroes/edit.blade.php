@extends('layouts.app')

@section('content')
    <h1>Editar Héroe - {{ $hero->name }}</h1>

    <form action="{{ route('heroes.update', $hero->id) }}" method="post">

        @method('PUT')
        @include('admin.heroes.form')

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@endsection
