{{-- MAIN HTML ADMIN CONTENT --}}
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
    @include('layouts.inc.admin.adminsidebar')
        <div class="main-panel">
            @include('layouts.inc.admin.adminnav')

            <div class="content">
                @yield('content')
            </div>
            @include('layouts.inc.footer')
        </div>
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('admin/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/main.js') }}"></script>
    <script src="{{ asset('admin/js/chartjs.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
        const labels = [
          'January',
          'February',
          'March',
          'April',
          'May',
          'June',
        ];
      
        const data = {
          labels: labels,
          datasets: [{
            label: 'Example Graph',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45],
          }]
        };
      
        const config = {
          type: 'line',
          data: data,
          options: {}
        };
      </script>
      <script>
        const myChart = new Chart(
          document.getElementById('myChart'),
          config
        );
      </script>

    @yield('scripts')
</body>

</html>

