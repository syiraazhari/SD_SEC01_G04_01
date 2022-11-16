{{-- VOTER VOTING CONTENT (GENERAL SEAT VOTING)--}}
{{-- NEXT: AHIBS SEAT VOTING --}}
@extends('layouts.voter')
@extends('layouts.app')
@section('content4')
    {{-- first four column --}}
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
  margin: 4px 3px;
  cursor: pointer;
}
.box-one{
    background-color: white;
    padding: 20px;
    height: 350px;
    width: auto;
    border: 2px solid black;
    margin: 45px;
    overflow: auto;
  }
.allColumns{
  float:left;
  width: 50%;
  padding: 5px;
}
.row::after{
  content: "";
  clear: both;
  display: table;
}
.checkbox{
  margin-top: 8px;
  width: 20px;
  height: 20px;
}

</style>
</head>
<body>
<div class="content-margin">
    <div class="row" style="padding-top: 1.5rem;margin: auto; width:100%">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title" style="text-align: center;">GENERAL SEAT</h2>
          </div>
          <div class="card-body">
            <h4 class="card-title" style="text-align: center;">Please vote 1 seats</h4>

            <form method="post" action="{{url('generalVote')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="position_id" value="1">
              <div class="box-one">
              <div class="row">
                
                <div style="text-align: right">
                  <div class="allColumns">
                  <img src="{{ asset('assets/img/mjiit-2.jpg') }}" style="margin-bottom: 15px; margin-top: 22px">
                    <h5>Faizul Ahmad Bin Saiful</h5>
                    <h6>3 DDWP </h6>
               
                      <input type="checkbox" class="checkbox" name="candidate_id" value="1">
                      <span class="checkmark"></span>
                    
                  </div> 
                  
                  <div class="allColumns">
                  <img src="{{ asset('assets/img/mjiit-1.jpg') }}" style="margin-bottom: 15px">
                    <h5>Alia Rosdina Binti Mohd Ali</h5>
                    <h6>3 DDWG </h6>   
                
                      <input type="checkbox" class="checkbox" name="candidate_id" value="2">
                      <span class="checkmark"></span>                  
                  </div> 

                </div>
              </div>
              </div>
            
              <div class="container" style="text-align: center;">  
                {{-- <a href= "{{ url('voter/votingpage/votingahibs') }}" class ="button"> Submit Vote </a> --}}
                <button id="button" type="submit" class="button">Submit Vote</button>
              </div>  
            </form>
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