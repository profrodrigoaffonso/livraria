<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Estante;


class EstantesController extends Controller
{
    public function index(){

        $estantes = Estante::get();
        
        return view('estantes.index', compact('estantes'));

    }

    public function create(){
        
        return view('estantes.create');

    }

    public function store(Request $request){

        $dados = $request->all();

        Estante::create($dados);

        return redirect(route('estantes.index'));

    }

    public function edit($id){

        $estante = Estante::findOrFail($id);
        
        return view('estantes.edit', compact('estante'));

    }

    public function update(Request $request){

        $dados = $request->all();

        $estante = Estante::findOrFail($dados['id']);

        $estante->update([
            'nome' => $dados['nome']
        ]);
        
        return redirect(route('estantes.index'));

    }
}
