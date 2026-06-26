<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game_Team extends Model
{
    use HasFactory;

            public function teams()
    {
        return $this->belongsToMany(\App\Models\Team::class);
    }

            public function games()
    {
        return $this->belongsToMany(\App\Models\Game::class);
    }
}
