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
        
    </head>

@extends('layouts.app')
@section('content')

<body style="background-color:#FEF1BE; height: 100%; background-size: cover;">
    
    <div class="wrapper">
        
			<div class="inner">
                <div class="image-holder" style="background-image: url(assets/img/voting.png); background-size: 100%; background-color: #FEE37D; background-repeat: no-repeat; background-position: center center;">
			    </div>

				<form method="POST" action="{{ route('login') }}">
                @csrf

					<h3>Log In</h3>
					<div class="form-wrapper">
                        <h6>Email</h6>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="joe@graduate.utm.my" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<i class="zmdi zmdi-email"></i>
					</div>

					<div class="form-wrapper">
                        <h6>Password<h6>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your Password" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
						<i class="zmdi zmdi-lock"></i>
					</div>
                    <div style="text-align: right">
                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" style="color: #000000; text-decoration: none;">
                                    {{ __('forgot password?') }}
                                    </a>
                    @endif
                    </div>

                    <div>
                        <br><br><br>
					<button class="button" type="submit" style="border-radius: 5px 5px;">
                        Sign In
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
                    </div>
				</form>
			</div>
	</div>

</body>

@endsection
        
</html>