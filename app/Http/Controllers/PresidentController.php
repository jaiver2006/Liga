<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\President;

class PresidentController extends Controller
{
    public function create()
    {

        return view('President.create');
    }

    public function store(Request $request)
    {
        President::create($request->all());
    }
}
