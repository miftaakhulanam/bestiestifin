<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 8 foto galeri terbaru untuk ditampilkan di home
        $galleries = GalleryItem::latest()->take(8)->get();

        // Ambil 3 artikel terbaru untuk ditampilkan di home
        $articles = Article::latest()->take(3)->get();

        return view('frontend.home', compact('galleries', 'articles'));
    }
}
