<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kategori</title>
</head>
<body>
    <h1>Tambah Kategori</h1>
    <form action="{{ route('kategori.store') }}" method="POST">
        @include('admin.kategori._form')
    </form>
</body>
</html>
