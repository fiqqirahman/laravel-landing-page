<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tag</title>
</head>
<body>
    <h1>Daftar Tag</h1>
    <a href="{{ route('tag.create') }}">Tambah Tag</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Slug</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>
                        <a href="{{ route('tag.edit', $item) }}">Edit</a>
                        <form action="{{ route('tag.destroy', $item) }}" method="POST" style="display:inline;">
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
