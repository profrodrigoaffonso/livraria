<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Autor;


class AutoresController extends Controller
{
    public function index(){

        $autores = Autor::get();
        
        return view('autores.index', compact('autores'));

    }

    public function create(){
        
        return view('autores.create');

    }

    public function store(Request $request){

        $dados = $request->all();

        Autor::create($dados);

        return redirect(route('autores.index'));

    }

    public function edit($id){

        $autor = Autor::findOrFail($id);
        
        return view('autores.edit', compact('autor'));

    }

    public function update(Request $request){

        $dados = $request->all();

        $autor = Autor::findOrFail($dados['id']);

        $autor->update([
            'nome' => $dados['nome']
        ]);
        
        return redirect(route('autores.index'));

    }
}
