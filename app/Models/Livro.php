<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['autor_id', 'editora_id', 'estante_id', 'titulo', 'ano', 'descricao'];

}
