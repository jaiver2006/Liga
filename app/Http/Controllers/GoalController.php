<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;

class GoalController extends Controller
{
    public function create()
    {

        return view('Goal.create');
    }

    public function store(Request $request)
    {
        Goal::create($request->all());
    }
}
