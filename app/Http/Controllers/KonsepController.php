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
        try {
            $concept = Concept::query()->where('slug', $slug)->first();

            if (!$concept) {
                abort(404, 'Concept not found');
            }

            return view('konsep.show', compact('concept'));
        } catch (\Exception $e) {
            \Log::error('Concept show error: ' . $e->getMessage());
            abort(404, 'Concept not found');
        }
    }
}
