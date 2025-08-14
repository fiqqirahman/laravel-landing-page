<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::latest()->paginate(10);
        return view('admin.tag.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tag.create', [
            'tag' => new Tag(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(['nama' => 'required|string|max:255|unique:tags,nama']);
        Tag::create([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
        ]);
        return redirect()->route('tag.index')->with('success', 'Tag berhasil ditambahkan.');
    }

    public function edit(Tag $tag)
    {
        return view('admin.tag.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate(['nama' => 'required|string|max:255|unique:tags,nama,' . $tag->id]);
        $tag->update([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
        ]);
        return redirect()->route('tag.index')->with('success', 'Tag berhasil diperbarui.');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tag.index')->with('success', 'Tag berhasil dihapus.');
    }
}
