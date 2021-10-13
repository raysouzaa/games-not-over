<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function getAllGames() {

    }

    public function createGame(Request $request) {
        $game = new Jogo;
        $game->name = $request->nome;
        $game->ano = $request->ano;
        $game->descricao = $request->descricao;
        $game->preco = $request->preco;
        $game->image = $request->image;
        $game->estoque = $request->estoque;
        $game->save();

        return response()->json([
            "message" => "jogo criado"
        ], 201);
    }

    public function getGame($id) {

    }

    public function updateGame(Request $request, $id) {

    }

    public function deleteGame ($id) {

    }
}
