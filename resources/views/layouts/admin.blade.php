<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'tasrih') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">tasrih</a>
<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
<ul class="navbar-nav px-3">
<li class="nav-item text-nowrap">
    <a class="nav-link" href="#">Sign out</a>
</li>
</ul>
</nav>
<div class="container-fluid">
<div class="row">
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
    <ul class="nav flex-column">
        <li class="nav-item">
        <a class="nav-link active" href="#">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">
            <span data-feather="users"></span>
            Users
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">
            <span data-feather="file"></span>
            Permits
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">
            <span data-feather="activity"></span>
            Active
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">
            <span data-feather="bar-chart-2"></span>
            Inactive
        </a>
        </li>
    </ul>
    </div>
</nav>

<div role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
            </button>
        </div>
    </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
