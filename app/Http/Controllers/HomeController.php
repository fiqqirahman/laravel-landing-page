<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $berita = Berita::with('kategori')->latest()->paginate(10);
        return view('welcome', compact('berita'));
    }

    public function show(Berita $berita)
    {
        return view('berita.show', compact('berita'));
    }
}
