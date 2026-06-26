<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

        public function teams()
    {
        return $this->belongsTo(\App\Models\Team::class);
    }

        public function goals()
    {
        return $this->hasMany(\App\Models\Goal::class);
    }
}
