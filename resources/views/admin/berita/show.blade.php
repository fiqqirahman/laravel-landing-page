<!DOCTYPE html>
<html>
<head>
    <title>{{ $berita->judul }}</title>
</head>
<body>
    <h1>{{ $berita->judul }}</h1>
    <p><strong>Kategori:</strong> {{ $berita->kategori->nama }}</p>
    <div>
        {!! $berita->konten !!}
    </div>
    @if ($berita->gambar)
        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" width="300">
    @endif
    <div>
        <strong>Tags:</strong>
        @foreach ($berita->tags as $tag)
            <span>{{ $tag->nama }}</span>
        @endforeach
    </div>
    <a href="{{ route('berita.index') }}">Kembali</a>
</body>
</html>
