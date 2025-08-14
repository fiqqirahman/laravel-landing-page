<!DOCTYPE html>
<html>
<head>
    <title>Edit Berita</title>
</head>
<body>
    <h1>Edit Berita</h1>
    <form action="{{ route('berita.update', $berita) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.berita._form')
    </form>
</body>
</html>
