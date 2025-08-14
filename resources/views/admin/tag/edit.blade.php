<!DOCTYPE html>
<html>
<head>
    <title>Edit Tag</title>
</head>
<body>
    <h1>Edit Tag</h1>
    <form action="{{ route('tag.update', $tag) }}" method="POST">
        @method('PUT')
        @include('admin.tag._form')
    </form>
</body>
</html>
