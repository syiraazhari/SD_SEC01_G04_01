<!doctype html>
<html lang="en">
<head>
    <title>UndiMPP UTMKL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- Styles -->
	  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('admin/css/styleprofile.css') }}" rel="stylesheet">
    
    <style>
      .admin-flex {
        flex-wrap: wrap;
        min-width: 0; 
        justify-content:space-between;
        flex-direction: column; }
      .icon-padding {
			  padding-right:10px }
    </style>
</head>

<body style="height: auto">

<div class="wrapper d-flex align-items-stretch" style="height: auto;">
	<nav id="sidebar">
		<div class="p-4 pt-5">
	    <ul class="list-unstyled components mb-5">
	      <li class="{{ Request::is('adminpanel') ? 'active':'' }} ">
	        <a href="{{ url('adminpanel') }}"><i class='bx bxs-home-alt-2 icon-padding'></i>Home</a>
	      </li>
	      <li class="{{ Request::is('adminpanel/profiles') ? 'active':'' }} ">
	        <a href="{{ url('adminpanel/profiles') }}"><i class='bx bxs-user icon-padding'></i>Profile</a>
	      </li>
				<li>
				<a href="#voterSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='bx bxs-institution icon-padding'></i>Voter</a>
              		<ul class="collapse list-unstyled" id="voterSubmenu">
                		<li>
                  			<a href="">Voting Page</a>
                		</li>
                		<li>
             	 	</ul>
	          	</li>
	          	<li>
             		<a href="#candidateSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='bx bxs-institution icon-padding'></i>Candidate</a>
              		<ul class="collapse list-unstyled" id="candidateSubmenu">
                		<li>
                  			<a href="#">Candidate Page</a>
                		</li>
                		<li>
                    		<a href="#">Candidate List</a>
                		</li>
                		<li>
                   			<a href="#">View Transaction</a>
               			</li>
             	 	</ul>
	          	</li>
	          	<li class="{{ Request::is('mppalumni') ? 'active':'' }} ">
              		<a href="{{ url('mppalumni') }}"><i class='bx bxs-institution icon-padding'></i>MPP Alumni</a>
	        		 </li>
	          	<li class="{{ Request::is('aboutmpp') ? 'active':'' }} ">
              		<a href="{{ url('aboutmpp') }}"><i class='bx bxs-info-circle icon-padding'></i>About MPP</a>
	        	</li>
				    <li class="{{ Request::is('contact') ? 'active':'' }} ">
              		<a href="{{ url('contact') }}"><i class='bx bxs-envelope icon-padding'></i>Contact Us</a>
	        	</li>
				<li>
					<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class='bx bxs-arrow-to-right icon-padding'></i>                       
            {{ __('Log Out') }}
            </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                    </form>
	        	</li>
	        </ul>
	    </div>
    </nav>
    @yield('content2')
</div>
   
    <!-- Scripts -->
    <script src="{{ asset('admin/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/main.js') }}"></script>
    <script src="{{ asset('admin/js/chartjs.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('admin/js/popper.js') }}" defer></script>
    
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