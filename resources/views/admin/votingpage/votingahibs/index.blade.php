{{-- ADMIN VOTING CONTENT (AHIBS SEAT VOTING)--}}
{{-- NEXT: FTIR SEAT VOTING --}}
@extends('layouts.admin')
@extends('layouts.app')
@section('content2')
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
    <div class="row" style="padding-top: 1.5rem; margin: auto; width:100%">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title" style="text-align: center;">FACULTY / SCHOOL SEAT</h2>
            <h5 class="card-title" style="text-align: center;">Azman Hashim International Business School (AHIBS)</h5><br>
          </div>
          <div class="card-body">
            <h4 class="card-title" style="text-align: center;">*Voter needs to vote (1) candidate</h4>
            
            <div class="box-one">
              <div class="row">

                <div style="text-align: right">
                  <div class="allColumns">
                    <img src="{{ asset('assets/img/team-3.jpeg') }}" style="margin-bottom: 15px;">
                    <h5>Aina Amisha Binti Ahmad Fakrurrozi</h5>
                    <h6>3 DDWA </h6>
                  </div> 
                  
                  <div class="allColumns">
                    <img src="{{ asset('assets/img/team-5.jpeg') }}" style="margin-bottom: 15px; margin-top: 22px">
                    <h5>Anushka Roshni Sivakumar</h5>
                    <h6>3 DDWB </h6>                
                  </div> 

              </div>
            </div>

          </div>
          <div class="container" style="text-align: center;">  
            <a href= "{{ url('adminpanel/votingpage/votinggeneral') }}" class ="button"> < Previous Seat </a>
            <a href= "{{ url('adminpanel/votingpage/votingftir') }}" class ="button"> View Next Seat > </a>
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