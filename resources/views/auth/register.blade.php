<!doctype html>
<html lang="en">
    <head>
        <title>UndiMPP UTMKL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

        <!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
        
        <!-- STYLE CSS -->
        <link href="{{asset('assets/css(register page)/style.css')}}" rel="stylesheet">
        <style>

    </style>
    </head>

@extends('layouts.app')
@section('content')

<body style="background-color:#EDDCD9; height: 100%; background-size: cover;">
    
    <div class="wrapper">
        
			<div class="inner">
				<div class="image-holder" style="background-image: url(assets/img/voteicon.png); background-size: 70%; background-color: #F5CAC2; background-repeat: no-repeat; background-position: center center;">
                    
				</div>
				<form method="POST" action="{{ route('register') }}">
                @csrf

					<h3>Registration Form</h3>
					<div class="form-wrapper">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<i class="zmdi zmdi-account"></i>
					</div>

					<div class="form-wrapper">
                    <input id="email" pattern="^[a-zA-Z0-9_.+-]+@graduate.utm.my$" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address     (@graduate.utm.my)" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<i class="zmdi zmdi-email"></i>
					</div>

					<div class="form-wrapper">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<i class="zmdi zmdi-lock"></i>
					</div>

					<div class="form-wrapper">
						<input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button class="button" type="submit" style="border-radius: 5px 5px;">
                        Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
	</div>

</body>

@endsection
        
</html>