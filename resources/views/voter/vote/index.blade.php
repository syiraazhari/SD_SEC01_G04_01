{{-- VOTER VOTING CONTENT (VOTING INSTRUCTIONS) --}}
{{-- NEXT: VOTING REGULATIONS --}}
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
    <div class="row" style="padding-top: 1.5rem; padding-left: 1.5rem;">
      
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title" style="text-align: center;">Voting Instructions</h2><br>
          </div>
          <div class="card-body">
            <h4 class="card-title" style="text-align: center;">There are two sections for you to vote:</h4><br>
            <p class="card-title" style="text-align: center;">1) General Seat</p>
            <p class="card-title" style="text-align: center;">- Please choose (<b>2</b>) candidate only for General Seats.</p><br>
            <p class="card-title" style="text-align: center;">2) School / Faculty Seat</p>
            <p class="card-title" style="text-align: center;">- Please choose (<b>2</b>) candidate only for School / Faculty Seats.</p><br><br>
            <p class="card-title" style="text-align: center; color: red;"><i>Please click 'Cast Vote' to start Voting</i></p><br>

            <div class="container" style="text-align: center;">  
              <a href= "{{ url('voter/votingpage/votingregulation') }}" class ="button"> Cast Vote </a>
            </div>  
          
          </div>
          <div class="card-footer">
            <hr><br>
          </div>
        </div>
      </div>
    </div>
    
</body>
</html>
@endsection