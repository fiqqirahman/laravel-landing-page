<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::latest()->paginate(10);
        return view('admin.kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('admin.kategori.create', [
            'kategori' => new Kategori(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(['nama' => 'required|string|max:255|unique:kategori,nama']);
        Kategori::create([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
        ]);
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit(Kategori $kategori)
    {
        return view('admin.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, Kategori $kategori)
    {
        $request->validate(['nama' => 'required|string|max:255|unique:kategori,nama,' . $kategori->id]);
        $kategori->update([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
        ]);
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
