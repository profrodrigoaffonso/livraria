@extends('layouts.admin')

@section('content')
  <form action="{{ route('livros.store') }}" method="POST">
    @csrf
   
      @component('components.forms.select',[
          'label'     => 'Autor',
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
       
      @component('components.forms.select',[
          'label'     => 'Estante',
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
       
      @component('components.forms.select',[
          'label'     => 'Editora',
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
    {{-- <div class="form-group">
      <label for="exampleInputEmail1">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo" required>
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div> --}}
      @component('components.forms.input',[
          'label'     => 'Título',
          'name'      => 'titulo',
          'id'        => 'titulo',
          'value'     => '',
          'maxlength' => 150,
          'required'  => 'required',
      ])
      @endcomponent
      @component('components.forms.input',[
          'label'     => 'Ano',
          'name'      => 'ano',
          'id'        => 'ano',
          'value'     => '',
          'maxlength' => 4,
          'required'  => 'required',
      ])
      @endcomponent
      @component('components.forms.textarea',[
          'label'     => 'Descrição',
          'name'      => 'descricao',
          'id'        => 'descricao',
          'value'     => '',
          'required'  => 'required',
      ])
      @endcomponent      
      @component('components.forms.button', [
          'type'    => 'submit',
          'class'   => 'btn btn-primary',
          'label'   => 'Salvar'
      ])        
      @endcomponent  
    </form>
@endsection