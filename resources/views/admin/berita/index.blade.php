<!DOCTYPE html>
<html>
<head>
    <title>Daftar Berita</title>
</head>
<body>
    <h1>Daftar Berita</h1>
    <a href="{{ route('berita.create') }}">Tambah Berita</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($berita as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->kategori->nama }}</td>
                    <td>
                        <a href="{{ route('berita.show', $item) }}">Lihat</a>
                        <a href="{{ route('berita.edit', $item) }}">Edit</a>
                        <form action="{{ route('berita.destroy', $item) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
