@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categorias</h1>
    <a href="{{route('categorias.create') }}" class="btn-primary">Nueva categoria</a>
    <ul>
        @foreach ($categorias as $categoria)
        <li>
            <a href="{{route('categorias.edit', $categoria) }}">{{$categoria->nombre }}</a>
            <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>
@endsection
