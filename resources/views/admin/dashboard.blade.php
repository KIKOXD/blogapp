@extends('admin.master')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="mb-4">Welcome to the Dashboard</h1>
            <p>Here is the main content of your dashboard.</p>
        </div>
    </div>
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
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
            <img src="{{ asset('images/logo.png') }}" alt="Financial CRM Logo" class="img-fluid" style="width: 540px; height: 180px; object-fit: contain;">
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
        

        <!-- Download Button -->
        <div class="mt-4">
            <button class="btn btn-primary w-100">
                <i class="bi bi-download me-2"></i> Download Report
            </button>
        </div>
    </div>
</div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10">
                <!-- Header -->
                <div class="d-flex justify-content-between align-items-center py-3 px-4 bg-light border-bottom">
                    <h2 class="m-0">Overview</h2>
                    <div>
                        <i class="bi bi-search mx-2"></i>
                        <i class="bi bi-bell mx-2"></i>
                        <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-circle">
                    </div>
                </div>

                <!-- Dashboard Cards -->
                <div class="container mt-4">
                    <div class="row g-3">
                        <!-- Card 1 -->
                        <div class="col-lg-6">
                            <div class="card shadow-sm p-3">
                                <h5 class="fw-bold">Payment Overview</h5>
                                <p class="text-muted">Card Holder: Robert</p>
                                <div class="d-flex justify-content-between">
                                    <h3 class="text-primary">$5,200</h3>
                                    <p class="text-muted">Valid Thru: 05/21</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-lg-6">
                            <div class="card shadow-sm p-3">
                                <h5 class="fw-bold">Exchange Rates</h5>
                                <canvas id="exchangeRates"></canvas>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-lg-6">
                            <div class="card shadow-sm p-3">
                                <h5 class="fw-bold">Last Costs</h5>
                                <canvas id="lastCosts"></canvas>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="col-lg-6">
                            <div class="card shadow-sm p-3">
                                <h5 class="fw-bold">Efficiency</h5>
                                <p class="text-muted">Earned vs Spent</p>
                                <h3 class="text-success">$24,500</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Navigation -->
    <div class="d-md-none fixed-bottom bg-white border-top">
        <div class="d-flex justify-content-around py-2">
            <a href="#" class="text-decoration-none text-primary">
                <i class="bi bi-house-door"></i>
            </a>
            <a href="#" class="text-decoration-none text-primary">
                <i class="bi bi-bar-chart"></i>
            </a>
            <a href="#" class="text-decoration-none text-primary">
                <i class="bi bi-envelope"></i>
            </a>
            <a href="#" class="text-decoration-none text-primary">
                <i class="bi bi-person"></i>
            </a>
            <a href="#" class="text-decoration-none text-primary">
                <i class="bi bi-folder"></i>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script> --}}

    {{-- <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('admin.dashboard') }}">
                                <strong>Dashboard</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Manage Posts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                User Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Settings
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>
                <div>
                    <h2>Create New Post</h2>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Post</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
     --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
