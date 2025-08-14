<!DOCTYPE html>
<html>
<head>
    <title>Edit Kategori</title>
</head>
<body>
    <h1>Edit Kategori</h1>
    <form action="{{ route('kategori.update', $kategori) }}" method="POST">
        @method('PUT')
        @include('admin.kategori._form')
    </form>
</body>
</html>
