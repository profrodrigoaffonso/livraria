@extends('layouts.admin')

@section('content')
  <form action="{{ route('livros.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Autor</label>      
      @component('components.forms.select',[
          'name'      => 'autor_id',
          'id'        => 'autor_id',
          'values'    => $autores,
          'required'  => 'required',
          'selected'  => ''
      ])
      @endcomponent
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Estante</label>      
      @component('components.forms.select',[
          'name'      => 'estante_id',
          'id'        => 'estante_id',
          'values'    => $estantes,
          'required'  => 'required',
          'selected'  => ''
      ])
      @endcomponent
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Editora</label>      
      @component('components.forms.select',[
          'name'      => 'editora_id',
          'id'        => 'editora_id',
          'values'    => $editoras,
          'required'  => 'required',
          'selected'  => ''
      ])
      @endcomponent
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