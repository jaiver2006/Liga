<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function presidents()
    {
        return $this->belongsTo(\App\Models\President::class);
    }

    public function players()
    {
        return $this->hasMany(\App\Models\Player::class);
    }

    public function games()
    {
        return $this->belongsToMany(\App\Models\Game::class);
    }
}
