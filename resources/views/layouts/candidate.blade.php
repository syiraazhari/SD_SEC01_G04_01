{{-- MAIN HTML CANDIDATE CONTENT --}}
<!doctype html>
<html lang="en">
<head>
    <title>UndiMPP UTMKL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <!-- Fonts and Icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    {{-- CSS --}}
    <link href="{{asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('admin/css/paper-dashboard.css') }}" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        @include('layouts.inc.candidate.candidatesidebar')
            <div class="main-panel">
                @include('layouts.inc.candidate.candidatenav')

                <div class="content">
                    @yield('content')
                </div>
                @include('layouts.inc.footer')
            </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('admin/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/popper.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/main.js') }}" defer></script>
    
    @yield('scripts')
</body>
</html>