<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Tambahin Bootstrap buat styling cepat -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Admin Dashboard</h1>

        <!-- Navigation -->
        <nav class="nav justify-content-center my-4">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a class="nav-link" href="#">Manage Posts</a>
            <a class="nav-link" href="#">Settings</a>
        </nav>

        <!-- Main Content -->
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item"><a href="#">Create Post</a></li>
                    <li class="list-group-item"><a href="#">View All Posts</a></li>
                    <li class="list-group-item"><a href="#">User Management</a></li>
                </ul>
            </div>

            <!-- Content Area -->
            <div class="col-md-9">
                <h2>Welcome to the Admin Panel!</h2>
                <p>Use the navigation menu to manage the application.</p>
            </div>
        </div>
    </div>

    <!-- Tambahin JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
