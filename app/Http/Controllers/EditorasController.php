<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Editora;

class EditorasController extends Controller
{

    public function index(){

        $editoras = Editora::get();
        
        return view('editoras.index', compact('editoras'));

    }

    public function create(){
        
        return view('editoras.create');

    }

    public function store(Request $request){

        $dados = $request->all();

        Editora::create($dados);

        return redirect(route('editoras.index'));

    }

    public function edit($id){

        $editora = Editora::findOrFail($id);
        
        return view('editoras.edit', compact('editora'));

    }

    public function update(Request $request){

        $dados = $request->all();

        $editora = Editora::findOrFail($dados['id']);

        $editora->update([
            'nome' => $dados['nome']
        ]);
        
        return redirect(route('editoras.index'));

    }
}
