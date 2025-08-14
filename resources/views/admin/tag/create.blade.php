<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tag</title>
</head>
<body>
    <h1>Tambah Tag</h1>
    <form action="{{ route('tag.store') }}" method="POST">
        @include('admin.tag._form')
    </form>
</body>
</html>
