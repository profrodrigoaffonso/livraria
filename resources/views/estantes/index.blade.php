@extends('layouts.admin')

@section('content')
    <h1>Estantes</h1>
    <p><a href="{{ route('estantes.create') }}">Nova</a></p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th></th>             
            </tr>
        </thead>
        <tbody>
            @foreach($estantes as $estante)
            <tr>
                <td>{{ $estante->nome }}</td>
                <td><a href="/estantes/{{ $estante->id }}/edit">Editar</a></td>              
            </tr>
            @endforeach            
        </tbody>
    </table>
@endsection