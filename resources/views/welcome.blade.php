<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Viral News</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1, h2 { color: #1a1a1a; }
        h2 a { text-decoration: none; color: #d90000; }
        article { border-bottom: 1px solid #eee; padding-bottom: 20px; margin-bottom: 20px; }
        img { max-width: 100%; height: auto; border-radius: 5px; }
        .pagination { list-style: none; padding: 0; }
        .pagination li { display: inline; margin-right: 5px; }
        .pagination li a, .pagination li span { padding: 8px 12px; border: 1px solid #ddd; text-decoration: none; color: #d90000; }
        .pagination li.active span { background-color: #d90000; color: white; border-color: #d90000; }
    </style>
</head>
<body>
    <header style="text-align: center; margin-bottom: 40px;">
        <h1>Berita Viral Terkini</h1>
    </header>

    <main>
        @foreach ($berita as $item)
            <article>
                <h2>
                    <a href="{{ route('berita.detail', $item) }}">{{ $item->judul }}</a>
                </h2>
                <p><strong>Kategori:</strong> {{ $item->kategori->nama }} | <em>{{ $item->created_at->format('d M Y') }}</em></p>
                @if ($item->gambar)
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" width="200">
                @endif
                <div>
                    {{ \Illuminate\Support\Str::limit(strip_tags($item->konten), 200) }}
                </div>
            </article>
        @endforeach

        <div class="pagination">
            {{ $berita->links() }}
        </div>
    </main>
</body>
</html>
