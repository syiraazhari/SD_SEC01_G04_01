-<!doctype html>
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

<div class="container" style="margin-top:20px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#e89a13">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        <a href="{{ url('/') }}" class="btn btn-link p-0 m-0 align-baseline">Back to Home</a>
                        {{-- <button type="submit" onclick="{{ url('/') }}" class="btn btn-link p-0 m-0 align-baseline">Back to Home</button> --}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</html>