<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GriddyController extends Controller
{
    public function show()
    {
        $title = "HELLO HELLO HELLO HELO HELO HELO HEL HEL HEL HELL HELL HELL";
        return view('home', [
            'title' => $title
        ]);
        return view('home', compact('title', var_names: 'text'));
    }
}
