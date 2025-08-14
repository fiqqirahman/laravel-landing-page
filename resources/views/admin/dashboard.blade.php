<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body { font-family: sans-serif; margin: 0; }
        .header { display: flex; justify-content: space-between; align-items: center; padding: 20px; background-color: #f2f2f2; border-bottom: 1px solid #ddd; }
        .header h1 { margin: 0; font-size: 1.5em; }
        .header form { margin: 0; }
        nav { background-color: #fff; padding: 15px 20px; border-bottom: 1px solid #ddd; }
        nav ul { list-style: none; padding: 0; margin: 0; display: flex; }
        nav li { margin-right: 20px; }
        nav a { text-decoration: none; color: #333; font-weight: bold; font-size: 1.1em; }
        nav a:hover { color: #d90000; }
        .container { padding: 20px; }
    </style>
</head>
<body>
    <header class="header">
        <h1>Admin Panel</h1>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </header>
    <nav>
        <ul>
            <li><a href="{{ route('berita.index') }}">Kelola Berita</a></li>
            <li><a href="{{ route('kategori.index') }}">Kelola Kategori</a></li>
            <li><a href="{{ route('tag.index') }}">Kelola Tag</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Welcome, {{ Auth::guard('admin')->user()->name }}</h2>
        <p>Silakan pilih menu di atas untuk mengelola konten.</p>
    </div>
</body>
</html>
