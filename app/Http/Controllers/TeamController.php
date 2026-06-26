<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function pruebas()
    {
        $team = Team::find(1);

        return [
            'team' => $team,
            'players' => $team->players,
            
        ];
    }
}
