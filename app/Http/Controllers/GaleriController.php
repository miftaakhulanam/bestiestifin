<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryItem;

class GaleriController extends Controller
{
    public function index()
    {
        $galleries = GalleryItem::query()
            ->latest()
            ->paginate(12);

        return view('galeri.index', compact('galleries'));
    }
}
