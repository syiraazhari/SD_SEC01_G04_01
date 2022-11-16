{{-- VOTER VOTING CONTENT (VOTING INSTRUCTIONS) --}}
@extends('layouts.voter')
@extends('layouts.app')
@section('content4')

<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #f8a617;
  border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

  <div class="card">
    <div class="card-body">
      <h1>Admin Voting Page Content</h1>
</style>
</head>
<body>
<div class="content-margin">
    <div class="row" style="padding-top: 1.5rem;margin: auto; width:100%">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title" style="text-align: center;">YOUR VOTE HAS BEEN SUBMITTED !</h2>
          </div>
          <div class="card-body" style="text-align: center;">

          <img src="{{ asset('assets/img/tickGold.png') }}" style="margin-bottom: 15px;">
          <h4 class="card-title" style="text-align: center;">Winner from each seats will be announce <span style="color: red">soon</span>.</h4><br><br><br>

            <h4 class="card-title" style="text-align: center;"><i>"There's no such thing as a vote that doesn't matter."</i></h4><br>
            <h5 class="card-title" style="text-align: center;">- BARACK OBAMA -</h5><br>

          </div>
          <div class="card-footer">
            <hr>
          </div>
        </div>
      </div>
    </div>
    </div>
</body>
</html>
@endsection