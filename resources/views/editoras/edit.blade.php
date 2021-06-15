@extends('layouts.admin')

@section('content')
<form action="{{ route('editoras.update') }}" method="POST">
@method('PUT')
    @csrf
    <div class="form-group">
      <input type="hidden" id="id" name="id" value="{{ $editora->id }}">
      <label for="exampleInputEmail1">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" value="{{ $editora->nome }}" required>
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
@endsection