<!doctype html>
<html lang="en">
<head>
       <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       {{-- css file --}}
       <link rel="stylesheet" href="/css/app.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,0,0" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- CSS --}}
    <style>
        *{
               font-family: "Nunito", sans-serif;
               font-optical-sizing: auto;
               font-weight: <weight>;
               font-style: normal;
           }
        .icon-circle {
            width: 140px;
            height: 140px;
            background-color: #4B6F44;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 72px; /* Adjust as needed */
            margin: 0 auto;
        }
        .custom-dropdown {
            background-color: #4B6F44;
        }
        .custom-dropdown .dropdown-item:hover {
            background-color: #365A32; /* Slightly darker shade for hover */
        }
        </style>

        <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div id="app">

        {{-- navbar bg and logo --}}
        <nav class="navbar navbar-expand-lg navbar-light" style="background: #4B6F44;">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}" style="color:white">
                    <span class="material-icons">
                        agriculture
                    </span>
                    Farmer
                </a>

                {{-- Toggle button --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color:white">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color: white">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color:white; background: #4B6F44;"href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

{{-- Footer --}}
    <!-- FOOTER -->
    <div style="background: #4B6F44; color: white; padding: 7px; position:fixed; bottom:0; width:100%">
        <p style="float: right"><a href="#" style="color: white;">Back to top</a></p>
        <p style="margin-bottom: 0;">&copy; 2024 Smart Farmer Assistant Application (Made with Laravel 10) <br> For 6th Semester Software Development Course.</p>
    </div>
</body>
</html>
