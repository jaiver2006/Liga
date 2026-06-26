<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function pruebas()
    {
        $player = Player::find(4);

        return [
            'player' => $player,
            'team' => $player->team,
        ];
    }
}
