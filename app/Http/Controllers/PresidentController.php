<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\President;

class PresidentController extends Controller
{
        public function pruebas()
    {
        $president = President::find(1);

        return [
            'president' => $president,
            'team' => $president->team,
        ];
    }
}
