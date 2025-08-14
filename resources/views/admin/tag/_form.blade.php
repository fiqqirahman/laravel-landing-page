@csrf
<div>
    <label for="nama">Nama Tag</label>
    <input type="text" name="nama" id="nama" value="{{ old('nama', $tag->nama) }}" required>
</div>
<button type="submit">Simpan</button>
