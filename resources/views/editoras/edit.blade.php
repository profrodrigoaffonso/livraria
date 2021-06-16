@extends('layouts.admin')

@section('content')
<form action="{{ route('editoras.update') }}" method="POST">
@method('PUT')
    @csrf
    @component('components.forms.hidden',[
        'name'      => 'id',
        'id'        => 'id',
        'value'     => $editora->id
    ])
    @endcomponent
    @component('components.forms.input',[
        'label'     => 'Nome',
        'name'      => 'nome',
        'id'        => 'nome',
        'value'     => $editora->nome,
        'maxlength' => 100,
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