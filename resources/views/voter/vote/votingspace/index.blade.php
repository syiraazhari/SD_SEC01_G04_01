{{-- VOTER VOTING CONTENT (SPACE SEAT VOTING)--}}
{{-- NEXT: VOTE SUBMITTED PAGE --}}
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
          <h2 class="card-title" style="text-align: center;">FACULTY / SCHOOL SEAT</h2>
          <h5 class="card-title" style="text-align: center;">School of Professional and Continuing Education (SPACE)</h5><br>
        </div>
        <div class="card-body">
          <h4 class="card-title" style="text-align: center;">Please vote for one (1) candidate</h4>
          
          <form method="post" action="{{url('spaceVote')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="position_id" value="5">
          
          <div class="box-one">
            <div class="row">

              <div style="text-align: right">
                <div class="allColumns">
                <img src="{{ asset('assets/img/space-1.jpg') }}" style="margin-bottom: 15px; margin-top: 30px">
                    <h5>Mei Xing</h5>
                    <h6>3 DDWD </h6>
              
                  <input type="checkbox" class="checkbox" name="candidate_id" value="1">
                    <span class="checkmark"></span>
                  
                </div> 
                
                <div class="allColumns">
                <img src="{{ asset('assets/img/space-2.jpg') }}" style="margin-bottom: 15px">
                    <h5>Wahyu Bakti</h5>
                    <h6>2 DDWP </h6>
              
                  <input type="checkbox" class="checkbox" name="candidate_id" value="4">
                    <span class="checkmark"></span>
                </div>

              </div>
            </div>

          </div>
          <div class="container" style="text-align: center;">  
            {{-- <a href= "{{ url('voter/votingpage/votingsubmit') }}" class ="button"> Submit Vote </a> --}}
            <button id="button" type="submit" class="button">Submit Vote</button>
          </div>
        </form>  
        <div class="card-footer">
          <hr>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
@endsection