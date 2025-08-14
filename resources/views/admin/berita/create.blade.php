<!DOCTYPE html>
<html>
<head>
    <title>Tambah Berita</title>
</head>
<body>
    <h1>Tambah Berita</h1>
    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
        @include('admin.berita._form')
    </form>
</body>
</html>
