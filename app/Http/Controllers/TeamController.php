<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function create()
    {

        return view('Team.create');
    }

    public function store(Request $request)
    {
        Team::create($request->all());
    }
}
