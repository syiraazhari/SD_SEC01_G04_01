<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>UndiMPP UTMKL</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('admin/css/paper-dashboard.css') }}" rel="stylesheet">
    <link href="{{asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">
    <link href="{{asset('frontend/css/custom.css') }}" rel="stylesheet">
    <style>
        img {
            padding: 0;
            margin-top: 0px;
            margin-bottom: 4px;
            max-height: 22%;
            max-width: 22%;
        }

    </style>
</head>
<body>
    <div id="app">
        <div id="myHeader">
            <nav class="navbar navbar-default navbar-expand-md navbar-light bg-white shadow-sm" style="padding:30px; height: 90px; width:100>
        
                <div class="container" style="margin:0;">
            
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <img src="{{ asset('assets/img/logo-utmxjpmpp.png') }}" style="margin:0">

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" style="color: black; font-weight: normal;" href="{{ url('/') }}">{{ __('Home') }}</a>    
                            </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: black" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: black" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                {{-- <a class="nav-link" style="font-weight: normal;">
                                    {{ Auth::user()->name }}
                                </a> --}}
                                @if (Auth::check())
                                    @if (Auth::user()->role_as == '0')
                                        <a class="nav-link" style="font-weight: normal;">
                                            Voter
                                        </a>
                                    @endif
                                    @if (Auth::user()->role_as == '1')
                                        <a class="nav-link" style="font-weight: normal;">
                                            Admin
                                        </a>
                                    @endif
                                    @if (Auth::user()->role_as == '2')
                                        <a class="nav-link" style="font-weight: normal;">
                                            Candidate
                                        </a>
                                    @endif
                                @endif
                            </li>
                        @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')
    </div>
        <!-- Scripts -->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
    <script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
            }
        }
    </script>
</body>
</html>