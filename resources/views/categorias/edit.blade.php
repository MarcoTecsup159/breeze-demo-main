@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Categoria</h1>
    <form action="{{ route('categorias.update', $categoria) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre de la Categoria: </label>
            <input type="text" name="nombre" value="{{ $categoria->nombre }}" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>
</div>
@endsection