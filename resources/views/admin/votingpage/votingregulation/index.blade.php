{{-- ADMIN VOTING CONTENT (VOTING REGULATIONS) --}}
{{-- NEXT: GENERAL SEAT VOTING --}}
@extends('layouts.admin')
@extends('layouts.app')
@section('content2')

<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #f8a617;
  border: none;
  color: white;
  padding: 12px 17px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
p{
    font-size: 15px;
}
</style>
</head>
<body>
<div class="content-margin" style="width:100%">
    <div class="row" style="padding-top: 1.5rem; margin: auto; width:100%">    
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title" style="text-align: left;">Voting Regulations<hr></h2>
          </div>
          <div class="card-body">
            <p class="card-title" style="text-align: left;">1) The vote cast are confidential voluntary and there and there is no coercion or influence by any party,
                                                                whether the MPP UTM, or any faculty and school.</p><br>
            <p class="card-title" style="text-align: left;">2) Voters must follow all specified voting procedures.</p><br>
            <p class="card-title" style="text-align: left;">3) Every voter will vote for the candidate to represent the General Seat and their respective Faculty / School Seat.</p><br>
            <p class="card-title" style="text-align: left;">4) Voters must vote according to the number of votes required for the seat contested either 
                                                                General Seat or Faculty / School Seat.</p><br>
            <p class="card-title" style="text-align: left;">5) Voters are not allowed to bring in any written document, particularly one that is related to the MPP Election voting.</p><br>
            <p class="card-title" style="text-align: left;">6) Voters are not allowed to record any ballot papers during the voting process.</p><br>
  
          </div>
          <div class="card-footer">
            <hr><div class="container" style="text-align: right;">  
                    <a href= "{{ url('adminpanel/votingpage/votinggeneral') }}" class ="button"> Proceed to Vote </a>
                </div>
          </div>

        </div>
      </div>
    </div>
</div>
</body>
</html>
@endsection