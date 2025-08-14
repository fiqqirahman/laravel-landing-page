<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <div>
            <label>Email</label>
            <input type="email" name="email" required autofocus>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>
