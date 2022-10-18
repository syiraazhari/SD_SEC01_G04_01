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
            <div class="image-holder" style="background-image: url(/assets/img/changepass.png); background-size: 80%; background-color: #e89a13; background-repeat: no-repeat; background-position: center center;">
            </div>

            <form method="POST" action="{{ route('change.password') }}">
                @csrf

                <h3 style="margin-bottom: 40px">Change Password</h3>

                <div class="form-wrapper">
                    <h6 style="margin-bottom: 10px">Current Password</h6>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="current_password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <i class="zmdi zmdi-lock"></i>
                </div>

                <div class="form-wrapper">
                    <h6 style="margin-bottom: 10px">New Password</h6>

                    <input id="new_password" type="password" class="form-control @error('password') is-invalid @enderror" name="new_password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <i class="zmdi zmdi-lock"></i>
                </div>

                <div class="form-wrapper">
                    <h6 style="margin-bottom: 10px">Confirm New Password</h6>

                    <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" required autocomplete="current-password">
                        
                    <i class="zmdi zmdi-lock"></i>
                </div>

                <div>
                    <button class="button" type="submit" style="border-radius: 5px 5px;">
                        Change Password
                        <i class="zmdi zmdi-arrow-right"></i>
                    </button>
                </div>
            </form>
        </div>          
    </div>
</body>
@endsection
</html>