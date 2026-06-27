<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function create()
    {

        return view('Juego.create');
    }

    public function store(Request $request)
    {
        Game::create($request->all());
    }
}
