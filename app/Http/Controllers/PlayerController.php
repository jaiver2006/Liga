<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function create()
    {

        return view('Player.create');
    }

    public function store(Request $request)
    {
        Player::create($request->all());
    }
}
