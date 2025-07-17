@extends('layouts.admin')

@section('content')
    <h1>Livros</h1>
    <p><a href="{{ route('livros.create') }}">Nova</a></p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Editora</th>
                <th scope="col">Estante</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($livros as $livro)
            <tr>
                <td>{{ $livro->titulo }}</td>
                <td>{{ $livro->autor }}</td>
                <td>{{ $livro->editora }}</td>
                <td>{{ $livro->estante }}</td>
                <td><a href="{{ route('livros.edit', $livro->id) }}">Editar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
