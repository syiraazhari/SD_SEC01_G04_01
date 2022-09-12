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

<body style="background-color:#fff; height: 100%; background-size: cover;">

    <div class="wrapper">

        <div class="inner">
            <div class="image-holder" style="background-image: url(/assets/img/resetpass.png); background-size: 100%; background-color:#e89a13; background-repeat: no-repeat; background-position: center center;">
            </div>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <h3 style="margin-bottom: 30px">Reset Password</h3>

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="form-wrapper">

                        <h6 style="margin-bottom: 10px">Email</h6>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <i class="zmdi zmdi-email"></i>
                    </div>

                    <div>
                        <button class="button" type="submit" style="border-radius: 5px 5px;">
                            {{ __('Send Password Reset Link') }}
                            <i class="zmdi zmdi-arrow-right"></i>
                        </button>
                    </div>
                </form>
        </div>             
    </div>
</body>
@endsection

</html>
