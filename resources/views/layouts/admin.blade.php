<!doctype html>
<html lang="en">
<head>
    <title>UndiMPP UTMKL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    
</head>

<body style="height: auto">

<div class="wrapper d-flex align-items-stretch">
	<nav id="sidebar">
		<div class="custom-menu">
			<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        	<i class="fa fa-bars"></i>
	        	<span class="sr-only">Toggle Menu</span>
	        </button>
        </div>

		<div class="p-4 pt-5">
		<!--<h1><a href="index.html" class="logo">Splash</a></h1>-->
	        <ul class="list-unstyled components mb-5">
	        	<li class="active">
	            	<a href="admin.blade.php">Home</a>
	          	</li>
	          	<li>
	            	<a href="#">Profile</a>
	          	</li>
				<li>
				<a href="#voterSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Voter</a>
              		<ul class="collapse list-unstyled" id="voterSubmenu">
                		<li>
                  			<a href="#">Voting Page</a>
                		</li>
                		<li>
             	 	</ul>
	          	</li>
	          	<li>
             		<a href="#candidateSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Candidate</a>
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
	          	<li>
              		<a href="#">MPP Alumni</a>
	        		 </li>
	          	<li>
              		<a href="#">About MPP</a>
	        	</li>
				<li>
              		<a href="#">Contact Us</a>
	        	</li>
				<li>
					<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Log Out') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                    </form>
	        	</li>
	        </ul>

	    <div class="footer">
	    	<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a></p>
	    </div>

	    </div>
    </nav>
    @yield('content2')
</div>

    <script src="{{ asset('admin/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/popper.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/main.js') }}" defer></script>

</body>
</html>