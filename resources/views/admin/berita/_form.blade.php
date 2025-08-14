@csrf
<div>
    <label for="judul">Judul</label>
    <input type="text" name="judul" id="judul" value="{{ old('judul', $berita->judul) }}" required>
</div>
<div>
    <label for="konten">Konten</label>
    <textarea name="konten" id="konten" required>{{ old('konten', $berita->konten) }}</textarea>
</div>
<div>
    <label for="id_kategori">Kategori</label>
    <select name="id_kategori" id="id_kategori" required>
        @foreach ($kategori as $item)
            <option value="{{ $item->id }}" @selected(old('id_kategori', $berita->id_kategori) == $item->id)>
                {{ $item->nama }}
            </option>
        @endforeach
    </select>
</div>
<div>
    <label for="tags">Tags</label>
    <select name="tags[]" id="tags" multiple>
        @foreach ($tags as $tag)
            <option value="{{ $tag->id }}" @selected(in_array($tag->id, old('tags', $berita->tags->pluck('id')->toArray())))>
                {{ $tag->nama }}
            </option>
        @endforeach
    </select>
</div>
<div>
    <label for="gambar">Gambar</label>
    <input type="file" name="gambar" id="gambar">
</div>
<button type="submit">Simpan</button>
