@csrf
<div>
    <label for="nama">Nama Kategori</label>
    <input type="text" name="nama" id="nama" value="{{ old('nama', $kategori->nama) }}" required>
</div>
<button type="submit">Simpan</button>
