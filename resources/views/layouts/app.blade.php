<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="{{ secure_asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&family=Rubik&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">

    {{-- Icont Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <script src="{{secure_url('https://kit.fontawesome.com/53d273b61d.js')}}" crossorigin="anonymous"></script> --}}

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/site.webmanifest">

</head>
<body>
    <div id="app" class="h-100">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #ecf0f1;">
                <a class="navbar-brand" href="{{ url('/') }}" style="font-family: 'Playfair Display', serif;color: red;">
                    Story of Indonesia
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navigasi-override-style" id="navbarSupportedContent" style="font-family: 'Playfair Display', serif;font-size: 15px;">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Home</a>
                        </li>
                        {{-- for guest only --}}
                        @guest
                        <li class="nav-item dropdown show">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Category
                                </a>
                              
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item {{ Request::url() == url('/category/1') ? 'active' : '' }}" href="/category/1">🏖️ Beach</a>
                                  <a class="dropdown-item {{ Request::url() == url('/category/2') ? 'active' : '' }}" href="/category/2">⛰️ Mountain</a>
                                  <a class="dropdown-item {{ Request::url() == url('/category/3') ? 'active' : '' }}" href="/category/3">🎢 Theme Park</a>
                                  <a class="dropdown-item {{ Request::url() == url('/category/4') ? 'active' : '' }}" href="/category/4">🏛️ City</a>
                                  <a class="dropdown-item {{ Request::url() == url('/category/5') ? 'active' : '' }}" href="/category/5">🌲 Nature</a>
                                </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/aboutus">About Us</a>
                        </li>
                        @elseif (Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="/user/article">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/user">User</a>
                        </li>
                        @elseif (Auth::user()->role == 'user')
                        <li class="nav-item">
                            <a class="nav-link" href="/profile/{{Auth::user()->id}}">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/{{Auth::user()->id}}">Blog</a>
                        </li>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
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
        </nav>

        <main style="min-height: 100%;;">
            @yield('content')
        </main>

        <footer id="footer">
            <nav class="navbar navbar-dark bg-dark d-flex justify-content-center " style="font-family: 'Lora', serif;">
                <span class="navbar-brand mb-0 h1"><a class="text-light" style="text-decoration: none;" href="https://github.com/mfaisalghozi" target="_blank">Created With 🤍 By MFaisalGhozi</a></span>
              </nav>
        </footer>
    </div>
</body>
</html>
