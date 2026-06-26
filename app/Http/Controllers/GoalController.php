<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;

class GoalController extends Controller
{
    public function pruebas()
    {
        $goal = Goal::find(1);
        return [
            'goal' => $goal,
            'player' => $goal->player,
            'game' => $goal->game,
        ];
    }
}
