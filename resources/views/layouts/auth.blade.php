<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Link ke CSS -->
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="auth-container">
        <!-- Logo -->
        <div class="text-center mb-4">
            <img src="{{ asset('storage/uploads/logos/GIF-LOGO-MAHASLOT.gif') }}" alt="Logo" class="logo">
        </div>
        <!-- Konten Utama -->
        <div class="auth-form">
            @yield('content')
        </div>
    </div>
</body>
</html>
