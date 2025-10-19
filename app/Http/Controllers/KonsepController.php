<?php

namespace App\Http\Controllers;

use App\Models\Concept;
use Illuminate\Http\Request;

class KonsepController extends Controller
{
    public function index()
    {
        return view('konsep.index');
    }

    public function show(string $slug)
    {
        $concept = Concept::query()->where('slug', $slug)->firstOrFail();

        return view('konsep.show', compact('concept'));
    }
}
