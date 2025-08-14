<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $berita->judul }}</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1, h2 { color: #1a1a1a; }
        h2 a { text-decoration: none; color: #d90000; }
        article { border-bottom: 1px solid #eee; padding-bottom: 20px; margin-bottom: 20px; }
        img { max-width: 100%; height: auto; border-radius: 5px; margin-bottom: 20px; }
        .tags span { background-color: #f2f2f2; padding: 5px 10px; border-radius: 15px; margin-right: 5px; font-size: 0.9em; }
        a { color: #d90000; text-decoration: none; }
    </style>
</head>
<body>
    <a href="{{ route('home') }}">← Kembali ke Home</a>
    <hr style="margin-top: 20px; margin-bottom: 20px;">
    <article>
        <h1>{{ $berita->judul }}</h1>
        <p><strong>Kategori:</strong> {{ $berita->kategori->nama }} | <em>{{ $berita->created_at->format('d M Y') }}</em></p>

        @if ($berita->gambar)
            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
        @endif

        <div>
            {!! $berita->konten !!}
        </div>

        <div class="tags" style="margin-top: 20px;">
            <strong>Tags:</strong>
            @foreach ($berita->tags as $tag)
                <span>{{ $tag->nama }}</span>
            @endforeach
        </div>
    </article>
</body>
</html>
