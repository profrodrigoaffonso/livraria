@extends('layouts.admin')

@section('content')
<form action="{{ route('livros.update') }}" method="POST">
    @csrf
    @method('PUT')
    @component('components.forms.hidden',[
        'name'      => 'id',
        'id'        => 'id',
        'value'     => $livro->id
    ])
    @endcomponent
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
    @component('components.forms.input',[
        'label'     => 'Título',
        'name'      => 'titulo',
        'id'        => 'titulo',
        'value'     => $livro->titulo,
        'maxlength' => 150,
        'required'  => 'required',
    ])
    @endcomponent
    @component('components.forms.input',[
        'label'     => 'Ano',
        'name'      => 'ano',
        'id'        => 'ano',
        'value'     => $livro->ano,
        'maxlength' => 4,
        'required'  => 'required',
    ])
    @endcomponent
    @component('components.forms.textarea',[
        'label'     => 'Descrição',
        'name'      => 'descricao',
        'id'        => 'descricao',
        'value'     => $livro->descricao,
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