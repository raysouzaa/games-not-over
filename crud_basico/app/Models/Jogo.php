<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    protected $table = 'jogos';
    protected $fillable = ['nome', 'ano', 'descricao', 'preco', 'image', 'estoque'];
}
