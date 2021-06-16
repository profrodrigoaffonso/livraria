@extends('layouts.admin')

@section('content')
<form action="{{ route('livros.update') }}" method="POST">
<input type="hidden" id="id" name="id" value="{{ $livro->id }}" required>
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Autor</label>
      @component('components.forms.select',[
          'name'      => 'autor_id',
          'id'        => 'autor_id',
          'values'    => $autores,
          'required'  => 'required',
          'selected'  => $livro->autor_id
      ])
      @endcomponent
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Estante</label>
      <select class="form-control" id="estante_id" name="estante_id" required>
          <option></option>
          @foreach($estantes as $estante)
              <option {{($livro->estante_id == $estante->id ? 'selected' : '')}} value="{{ $estante->id }}">{{ $estante->nome }}</option>
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
              <option {{($livro->editora_id == $editora->id ? 'selected' : '')}} value="{{ $editora->id }}">{{ $editora->nome }}</option>
          @endforeach
      </select>
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $livro->titulo }}" required>
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Ano</label>
      <input type="text" maxlength="4" class="form-control" id="ano" name="ano" value="{{ $livro->ano }}" required>
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Descrição</label>
      <textarea class="form-control" id="descricao" name="descricao" required>{{ $livro->descricao }}</textarea>
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
@endsection