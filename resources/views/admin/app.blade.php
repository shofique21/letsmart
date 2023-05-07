<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .navbar-brand {
            font-size: 1.4em;
        }

        .navbar-dark .navbar-nav a.nav-link {
            color: #ffffff;
            font-size: 1.1em;
        }

        .dropdown-menu {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            border: none;
            border-radius: 0;
            padding: 0.7em;
        }

        @media only screen and (min-width: 992px) {
            .dropdown:hover .dropdown-menu {
                display: flex;
            }

            .dropdown-menu.show {
                display: flex;
            }
        }

        .dropdown-menu ul {
            list-style: none;
            padding: 0;
        }

        .dropdown-menu li .dropdown-item {
            color: gray;
            font-size: 1em;
            padding: 0.5em 1em;
        }

        .dropdown-menu li .dropdown-item:hover {
            background-color: #f1f1f1;
        }

        .dropdown-menu li:first-child a {
            font-weight: bold;
            font-size: 1.1em;
            text-transform: uppercase;
            color: #516beb;
        }

        .dropdown-menu li:first-child a:hover {
            background-color: #f1f1f1;
        }

        @media only screen and (max-width: 992px) {
            .dropdown-menu.show {
                flex-wrap: wrap;
                max-height: 350px;
                overflow-y: scroll;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1140px) {
            .dropdown:hover .dropdown-menu {
                width: 40vw;
                flex-wrap: wrap;
            }
        }

        .dropdown-menu {
            border-radius: 0;
            border: none;
            padding: 0.5em;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .dropdown-menu ul {
            list-style: none;
            padding: 0;
        }

        .dropdown-menu li a {
            color: gray;
            padding: 0.5em 1em;
        }

        .dropdown-menu li:first-child a {
            font-weight: bold;
            font-size: 1.1em;
            color: #006d77;
        }

        @media screen and (min-width: 993px) {
            .dropdown:hover .dropdown-menu {
                display: flex;
            }

            .dropdown-menu.show {
                display: flex;
            }
        }

        @media screen and (max-width: 992px) {
            .dropdown-menu.show {
                max-height: 60vh;
                overflow-y: scroll;
            }
        }
        .primary-bg-color{
            background-color:#006d77 !important;
        }
        .mrt-30{
            margin-top: 30px !important;
        }
        .mrb-30{
            margin-bottom: 30px !important;
        }
        .card-title span {
            color: #899bbd;
            font-size: 14px;
            font-weight: 400;
        }
        .align-items-center {
            align-items: center!important;
        }
        .d-flex {
            display: flex!important;
        }
       .sales-card .card-icon {
            color: #4154f1;
            background: #f6f6fe;
        }
      .card-icon {
            font-size: 32px;
            line-height: 0;
            width: 64px;
            height: 64px;
            flex-shrink: 0;
            flex-grow: 0;
        }
        .rounded-circle {
            border-radius: 50%!important;
        }
        .pb-15{
            padding-bottom: 15px !important;
        }
        .info-card h6 {
            font-size: 28px;
            color: #012970;
            font-weight: 700;
            margin: 0;
            padding: 0;
        }
        .text-success {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-success-rgb),var(--bs-text-opacity))!important;
        }
        .fw-bold {
            font-weight: 700!important;
        }
        .pt-1 {
            padding-top: 0.25rem!important;
        }
        text-muted {
            --bs-text-opacity: 1;
            color: #6c757d!important;
        }
        .ps-1 {
            padding-left: 0.25rem!important;
        }
        .mrb-15{
            margin-bottom: 15px !important;
        }
        .create-btn{
            position:absolute;
            right: 20px;
        }
    </style>
</head>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#006d77">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ url('/') }}"> {{ config('app.name', 'Laravel') }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dashboard
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="dropdown-item" href="#">Shop Management</a></li>
                                    <li><a class="dropdown-item" href="#">Product List</a></li>
                                    <li><a class="dropdown-item" href="#">Order List</a></li>
                                    <li><a class="dropdown-item" href="#">Invoice List</a></li>
                                    <li><a class="dropdown-item" href="#">User List</a></li>

                                </ul>
                                <ul>
                                    <li><a class="dropdown-item" href="#">Product management</a></li>
                                    <li><a class="dropdown-item" href="#">Product Create</a></li>
                                    <li><a class="dropdown-item" href="{{route('categories.index')}}">Category</a></li>
                                    <li><a class="dropdown-item" href="{{route('subcategories.index')}}">Subcategory</a></li>
                                    <li><a class="dropdown-item" href="#">User create</a></li>

                                </ul>
                                <ul>
                                    <li><a class="dropdown-item" href="#">Statics</a></li>
                                    <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                                    <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                                    <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
                                    <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @if(Session::has('adminInfo'))
                                {{ Session::get('adminInfo')['username'] }}
                                @endif
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="{{route('adminLogin')}}">Logout</a></li>

                                </ul>
                            </div>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>