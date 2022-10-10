{{-- ADMIN CANDIDATE PAGE CONTENT (SPACE) --}}
@extends('layouts.admin')
@extends('layouts.app')
@section('content2')
    {{-- first four column --}}
<!DOCTYPE html>
<html>
<head>
<style>

.seatCategory{
  display:inline-block; 
  margin: 20px;
  border: none;
  border-radius: 15px;
  padding: 10px;
}
.seatCategory:hover, .seatCategory:active{
  background-color: #f8a617;
}

.left,
.right {
  background-color: white;
  border: 2px solid black;
  overflow: hidden;
  border-radius: 15px;
}

.left {
  width: calc(77.2% - (.5em + 6px));
  float: left;
  min-height: 250px;
  margin-top: 1em;
}

.right {
  width: calc(22.8% - (.5em + 6px));
  float: right;
  min-height: 250px;
  margin-top: 1em;
}

</style>
</head>
<body>
    <div class="row" style="padding-top: 1.5rem; padding-left: 1.5rem;">
      
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title" style="text-align: center;">CANDIDATE PAGE</h2>
          </div>
          <div class="card-body">
            <div style="text-align: center;">
              <p style="color: black; font-size: 15px"><b>SEAT CATEGORY : SCHOOL OF PROFESSIONAL AND CONTINUING EDUCATION (SPACE)</b></p>
              <a href="{{ url('adminpanel/candidatepage') }}" class="seatCategory" style="color: black;">GENERAL</a>
              <a href="{{ url('adminpanel/candidatepage/candidateahibs') }}" class="seatCategory" style="color: black;">AHIBS</a>
              <a href="{{ url('adminpanel/candidatepage/candidateftir') }}" class="seatCategory" style="color: black;">FTIR</a>
              <a href="{{ url('adminpanel/candidatepage/candidatemjiit') }}" class="seatCategory" style="color: black;">MJIIT</a>
              <a href="{{ url('adminpanel/candidatepage/candidatespace') }}" class="seatCategory" style="color: black; background-color: #f8cc17;">SPACE</a>
            </div>
                <div style="margin-left: 75px; margin-right: 75px; margin-top: 20px;">

                  <div class="left">
                    <div style="padding: 15px">
                        <h2>MUHAMMAD IZMEER BIN ZULKIFLEE</h2> 
                        <p style="font-size: 20px;">3 DDWD</p><hr color="black">
                        <p style="font-size: 20px;">1.  MANIFESTO  MANIFESTOMANIFESTO  MANIFESTO<br>
                                                    2.  MANIFESTO  MANIFESTOMANIFESTO  MANIFESTO<br>
                                                    3.  MANIFESTO  MANIFESTOMANIFESTO  MANIFESTO<br>
                                                    4.  MANIFESTO  MANIFESTOMANIFESTO  MANIFESTO</p>
                    </div>
                  </div> 
                  <div class="right">
                    <div style="width: 930px;">
                    <img src="{{ asset('assets/img/team-2.jpg') }}">  
                    </div>         
                  </div> 

                  <div class="left">
                    <div style="padding: 15px">
                        <h2>MUHAMMAD IZMEER BIN ZULKIFLEE</h2> 
                        <p style="font-size: 20px;">3 DDWD</p><hr color="black">
                        <p style="font-size: 20px;">1.  MANIFESTO  MANIFESTOMANIFESTO  MANIFESTO<br>
                                                    2.  MANIFESTO  MANIFESTOMANIFESTO  MANIFESTO<br>
                                                    3.  MANIFESTO  MANIFESTOMANIFESTO  MANIFESTO<br>
                                                    4.  MANIFESTO  MANIFESTOMANIFESTO  MANIFESTO</p>
                    </div>
                  </div> 
                  <div class="right">
                    <div style="width: 930px;">
                    <img src="{{ asset('assets/img/team-2.jpg') }}">  
                    </div>         
                  </div> 

                  <div class="left">
                    <div style="padding: 15px">
                        <h2>MUHAMMAD IZMEER BIN ZULKIFLEE</h2> 
                        <p style="font-size: 20px;">3 DDWD</p><hr color="black">
                        <p style="font-size: 20px;">1.  MANIFESTO  MANIFESTOMANIFESTO  MANIFESTO<br>
                                                    2.  MANIFESTO  MANIFESTOMANIFESTO  MANIFESTO<br>
                                                    3.  MANIFESTO  MANIFESTOMANIFESTO  MANIFESTO<br>
                                                    4.  MANIFESTO  MANIFESTOMANIFESTO  MANIFESTO</p>
                    </div>
                  </div> 
                  <div class="right">
                    <div style="width: 930px;">
                    <img src="{{ asset('assets/img/team-2.jpg') }}">  
                    </div>         
                  </div> 
                  
                </div>
              
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