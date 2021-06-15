<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Editora;
use App\Models\Autor;
use App\Models\Estante;
use App\Models\Livro;

class LivrosController extends Controller
{
    public function index(){

        $livros = Livro::select('livros.id', 'livros.titulo', 'editoras.nome AS editora', 
                        'autores.nome AS autor', 'estantes.nome AS estante')
                        ->join('editoras', 'livros.editora_id', '=', 'editoras.id')
                        ->join('autores', 'livros.autor_id', '=', 'autores.id')
                        ->join('estantes', 'livros.estante_id', '=', 'estantes.id')
                        ->get();

        // dd($livros);

        return view('livros.index', compact('livros'));

    }

    public function create(){

        $editoras = Editora::select('id', 'nome')
            ->get();

        $autores = Autor::select('id', 'nome')
            ->get();

        $estantes = Estante::select('id', 'nome')
            ->get();
            

        return view('livros.create', compact('editoras', 'autores', 'estantes'));

    }

    public function store(Request $request){
        
        $dados = $request->all();

        Livro::create($dados);

        return redirect(route('livros.index'));

        // dd($dados);

    }

    public function edit($id){

        $editoras = Editora::select('id', 'nome')
            ->get();

        $autores = Autor::select('id', 'nome')
            ->get();

        $estantes = Estante::select('id', 'nome')
            ->get();

        $livro = Livro::findOrFail($id);
            

        return view('livros.edit', compact('livro', 'editoras', 'autores', 'estantes'));

    }

    public function update(Request $request){
        
        $dados = $request->all();

        $livro = Livro::findOrFail($dados['id']);

        $livro->update([
            'editora_id'    => $dados['editora_id'],
            'autor_id'      => $dados['autor_id'],
            'estante_id'    => $dados['estante_id'],
            'titulo'        => $dados['titulo'],
            'ano'           => $dados['ano'],
            'descricao'     => $dados['descricao']
        ]);

        return redirect(route('livros.index'));

    }
}
