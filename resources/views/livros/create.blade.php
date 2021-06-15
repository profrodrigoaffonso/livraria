@extends('layouts.admin')

@section('content')
<form action="{{ route('livros.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Autor</label>
      <select class="form-control" id="autor_id" name="autor_id" required>
          <option></option>
          @foreach($autores as $autor)
              <option value="{{ $autor->id }}">{{ $autor->nome }}</option>
          @endforeach
      </select>
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Estante</label>
      <select class="form-control" id="estante_id" name="estante_id" required>
          <option></option>
          @foreach($estantes as $estante)
              <option value="{{ $estante->id }}">{{ $estante->nome }}</option>
          @endforeach
      </select>
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Editora</label>
      <select class="form-control" id="editora_id" name="editora_id" required>
          <option></option>
          @foreach($editoras as $editora)
              <option value="{{ $editora->id }}">{{ $editora->nome }}</option>
          @endforeach
      </select>
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo" required>
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Ano</label>
      <input type="text" maxlength="4" class="form-control" id="ano" name="ano" required>
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Descrição</label>
      <textarea class="form-control" id="descricao" name="descricao" required></textarea>
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
@endsection