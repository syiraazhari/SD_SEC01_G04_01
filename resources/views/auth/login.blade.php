<!doctype html>
<html lang="en">
    <head>
        <title>UndiMPP UTMKL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    </head>

@extends('layouts.app')
@section('content')

	<body class="img js-fullheight" style="background-image: url(assets/img/Kampus-UTMKL.png); height: 100%; background-size: cover; backdrop-filter: blur(3px);">
    
    <section class="ftco-section">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">UndiMPP UTMKL</h2>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">

		      	<h3 class="mb-4 text-center">Have an account? Login Now.</h3>
		      	<form method="POST" action="{{ route('login') }}">
                        @csrf
                            
                            <div class="form-group">
                                <input id="email" style="background: transparent; border: #fffff; border-radius: 75px 75px" type="email" class="form-control @error('email') is-invalid @enderror" 
                                placeholder="Email Address" name="email" value="{{ old('email') }}" 
                                required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input id="password" style="background: transparent; border: #fffff; border-radius: 75px 75px" type="password" class="form-control @error('password') is-invalid @enderror" 
                                placeholder="Password" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        

	                        <div class="form-group">
	            	            <button type="submit" class="form-control submit px-3" style="border-radius: 75px 75px; background-color: #F8A617;">Sign In</button>
	                        </div>
                
	                        <div class="form-group d-md-flex">
	            	            <div class="w-50">
		            	            <label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" style="color: #fff">
                                    {{ __('Forgot Password') }}
                                    </a>
                                    @endif
								</div>
	                        </div>
	          </form>
	          
		            </div>
				</div>
			</div>
		</div>
	</section>

    <script src="{{asset('assets/js/jquery.min.js') }}" defer></script>
    <script src="{{asset('assets/js/popper.js') }}" defer></script>
    <script src="{{asset('assets/js/bootsrap.min.js') }}" defer></script>
    <script src="{{asset('assets/js/main.js') }}" defer></script>

    </body>

@endsection
</html>