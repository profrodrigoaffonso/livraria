@extends('layouts.admin')

@section('content')
<form action="{{ route('livros.update') }}" method="POST">
<input type="hidden" id="id" name="id" value="{{ $livro->id }}" required>
    @csrf
    @method('PUT')
    @component('components.forms.select',[
        'label'     => 'Autor',
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
    @component('components.forms.select',[
        'label'     => 'Estante',
        'name'      => 'estante_id',
        'id'        => 'estante_id',
        'values'    => $estantes,
        'required'  => 'required',
        'selected'  => $livro->autor_id
    ])
    @endcomponent
    @component('components.forms.select',[
        'label'     => 'Editora',
        'name'      => 'editora_id',
        'id'        => 'editora_id',
        'values'    => $editoras,
        'required'  => 'required',
        'selected'  => $livro->autor_id
    ])
    @endcomponent
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