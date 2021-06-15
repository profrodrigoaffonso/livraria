@extends('layouts.admin')

@section('content')
    <h1>Autores</h1>
    <p><a href="{{ route('autores.create') }}">Nova</a></p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th></th>             
            </tr>
        </thead>
        <tbody>
            @foreach($autores as $autor)
            <tr>
                <td>{{ $autor->nome }}</td>
                <td><a href="/autores/{{ $autor->id }}/edit">Editar</a></td>              
            </tr>
            @endforeach            
        </tbody>
    </table>
@endsection