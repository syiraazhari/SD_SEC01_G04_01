{{-- voter --}}
<!doctype html>
<html lang="en">
<head>
    <title>UndiMPP UTMKL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

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
            <li class="{{ Request::is('voter') ? 'active':'' }} ">
                <a href="{{ url('voter') }}"><i class='bx bxs-home-alt-2 icon-padding'></i>Home</a>
      </li>
      <li class="{{ Request::is('voter/profiles') ? 'active':'' }} ">
        <a href="{{ url('voter/profiles') }}"><i class='bx bxs-user icon-padding'></i>Profile</a>
      </li>
      <li class="{{ Request::is('voter/vote') ? 'active':'' }} ">
        <a href="{{ url('voter/votingpage') }}"><i class='bx bxs-institution icon-padding'></i>Vote Now</a>
      </li>
      <li class="{{ Request::is('testing') ? 'active':'' }} ">
        <a href="{{ url('testing') }}"><i class='bx bxs-book icon-padding'></i>Election Result</a>
      </li>
      <li class="{{ Request::is('voter/joinmpp') ? 'active':'' }} ">
        <a href="{{ url('voter/joinmpp') }}"><i class='bx bxs-user icon-padding'></i>#JOINMPP</a>
      </li>
      <li class="{{ Request::is('voter/candidateinfo') ? 'active':'' }} ">
        <a href="{{ url('voter/candidateinfo') }}"><i class='bx bxs-institution icon-padding'></i>Candidate Info</a>
      </li>
      <li class="{{ Request::is('voter/mppalumni') ? 'active':'' }} ">
        <a href="{{ url('voter/mppalumni') }}"><i class='bx bxs-institution icon-padding'></i>MPP Alumni</a>
      </li>
      <li class="{{ Request::is('voter/aboutmpp') ? 'active':'' }} ">
        <a href="{{ url('voter/aboutmpp') }}"><i class='bx bxs-info-circle icon-padding'></i>About MPP</a>
      </li>
      <li class="{{ Request::is('voter/contact') ? 'active':'' }} ">
        <a href="{{ url('voter/contact') }}"><i class='bx bxs-envelope icon-padding'></i>Contact Us</a>
      </li>
      <li class="active-pro">
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
    @yield('content4')
</div>

    <script src="{{ asset('admin/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/popper.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/main.js') }}" defer></script>

</body>
</html>