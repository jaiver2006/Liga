<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game_Team;

class GameTeamController extends Controller
{
        public function pruebas()
        {
            $gameTeam = Game_Team::find(1);
    
            return [
                'gameTeam' => $gameTeam,
                'game' => $gameTeam->game,
                'team' => $gameTeam->team,
            ];
        }
}
