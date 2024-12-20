<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/custom-dashboard.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar bg-white">
                <div class="d-flex flex-column p-3">
                    <!-- Logo -->
                    <div class="mb-4 text-center">
                        <!-- Path ke logo -->
                        <img src="{{ asset('storage/uploads/logos/GIF-LOGO-MAHASLOT.gif') }}" alt="Logo" class="img-fluid" style="width: 540px; height: 180px; object-fit: contain;">
                    </div>

                    <!-- Navigation Menu -->
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::is('admin/overview') ? 'active' : '' }}">
                                <i class="bi bi-house-door-fill me-2"></i> Overview
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link {{ Request::is('admin/statistics') ? 'active' : '' }}">
                                <i class="bi bi-bar-chart me-2"></i> Statistics
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link {{ Request::is('admin/messages') ? 'active' : '' }}">
                                <i class="bi bi-envelope me-2"></i> Messages
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link {{ Request::is('admin/profile') ? 'active' : '' }}">
                                <i class="bi bi-person me-2"></i> Profile
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link {{ Request::is('admin/documents') ? 'active' : '' }}">
                                <i class="bi bi-folder me-2"></i> Documents
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10">
                <div class="container py-3">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
