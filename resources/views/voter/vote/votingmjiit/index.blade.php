{{-- VOTER VOTING CONTENT (MJIIT SEAT VOTING)--}}
{{-- NEXT: SPACE SEAT VOTING --}}
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
    <div class="row" style="padding-top: 1.5rem; padding-left: 1.5rem;">
      
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title" style="text-align: center;">FACULTY / SCHOOL SEAT</h2>
            <h5 class="card-title" style="text-align: center;">Malaysia-Japan International Institute of Technology (MJIIT)</h5><br>
          </div>
          <div class="card-body">
            <h4 class="card-title" style="text-align: center;">Please vote (2) seats</h4>
            <p style="text-align: center; font-size: 16px;">0 out of 2 selected</p>
            
            <div class="box-one">
              <div class="row">

                <div style="text-align: right">
                  <div class="allColumns">
                    <img src="{{ asset('assets/img/team-4.jpg') }}" style="margin-bottom: 15px;">
                    <h5>Iskandar Hakimi Bin Zulkippli</h5>
                    <h6>3 DDWD </h6>
               
                      <input type="checkbox" class="checkbox">
                      <span class="checkmark"></span>
                    
                  </div> 
                  
                  <div class="allColumns">
                    <img src="{{ asset('assets/img/team-4.jpg') }}" style="margin-bottom: 15px">
                    <h5>Iskandar Hakimi Bin Zulkippli</h5>
                    <h6>3 DDWD </h6>
                
                      <input type="checkbox" class="checkbox">
                      <span class="checkmark"></span>                  
                  </div> 

                  <div class="allColumns">
                    <img src="{{ asset('assets/img/team-4.jpg') }}" style="margin-bottom: 15px;">
                    <h5>Iskandar Hakimi Bin Zulkippli</h5>
                    <h6>3 DDWD </h6>
               
                      <input type="checkbox" class="checkbox">
                      <span class="checkmark"></span>
                    
                  </div> 
                  
                  <div class="allColumns">
                    <img src="{{ asset('assets/img/team-4.jpg') }}" style="margin-bottom: 15px">
                    <h5>Iskandar Hakimi Bin Zulkippli</h5>
                    <h6>3 DDWD </h6>
                
                      <input type="checkbox" class="checkbox">
                      <span class="checkmark"></span>
                </div>

              </div>
            </div>

          </div>
          <div class="container" style="text-align: center;">  
              <a href= "{{ url('voter/votingpage/votingspace') }}" class ="button"> Submit Vote </a>
            </div>  
          <div class="card-footer">
            <hr>
          </div>
        </div>
      </div>
    </div>
    
</body>
</html>
@endsection