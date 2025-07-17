@extends('layouts.admin')

@section('content')
    <h1>Editoras</h1>
    <p><a href="{{ route('editoras.create') }}">Nova</a></p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($editoras as $editora)
            <tr>
                <td>{{ $editora->nome }}</td>
                <td><a href="{{ route('editoras.edit', $editora->id) }}">Editar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
