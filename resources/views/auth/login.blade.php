<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS Link -->
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <!-- Logo GIF -->
        <div class="text-center mb-4">
            <img src="{{ asset('storage/uploads/logos/GIF-LOGO-MAHASLOT.gif') }}" alt="Logo" class="logo">
        </div>
        <!-- Login Form -->
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
            <div class="text-center mt-3">
                <a href="{{ route('password.request') }}" class="text-muted">Forgot Password?</a>
            </div>
        </form>
    </div>
    <!-- JS Link -->
    <script src="{{ asset('js/auth.js') }}"></script>
</body>
</html>