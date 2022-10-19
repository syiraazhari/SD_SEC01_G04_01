{{-- VOTER CANDIDATE INFOR PAGE CONTENT (AHIBS) --}}
@extends('layouts.voter')
@extends('layouts.app')
@section('content4')
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
  overflow: hidden;
  border-radius: 15px;
}

.left {
  width: calc(77.2% - (.5em + 6px));
  float: left;
  min-height: 250px;
  margin-top: 1em;
  margin-bottom: 1em;
  background-color: white;
  border: 1px solid black;
}

.right {
  width: calc(22.8% - (.5em + 6px));
  float: right;
  min-height: 250px;
  margin-top: auto;
}

</style>
</head>
<body>
    <div class="row" style="padding-top: 1.5rem; padding-left: 1.5rem;">
      
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title" style="text-align: center;">CANDIDATE INFORMATION</h2>
          </div>
          <div class="card-body">
            <div style="text-align: center;">
              <p style="color: black; font-size: 15px"><b>SEAT CATEGORY : AZMAN HASHIM INTERNATIONAL BUSINESS SCHOOL (AHIBS)</b></p>
              <a href="{{ url('voter/candidateinfo') }}" class="seatCategory" style="color: black;">GENERAL</a>
              <a href="{{ url('voter/candidateinfo/candidateahibs') }}" class="seatCategory" style="color: black; background-color: #f8cc17;">AHIBS</a>
              <a href="{{ url('voter/candidateinfo/candidateftir') }}" class="seatCategory" style="color: black;">FTIR</a>
              <a href="{{ url('voter/candidateinfo/candidatemjiit') }}" class="seatCategory" style="color: black;">MJIIT</a>
              <a href="{{ url('voter/candidateinfo/candidatespace') }}" class="seatCategory" style="color: black;">SPACE</a>
            </div>
                <div style="margin-left: 75px; margin-right: 75px; margin-top: 20px;">

                  <div class="left">
                    <div style="padding: 15px">
                        <h3>MUHAMMAD IZMEER BIN ZULKIFLEE</h3> 
                        <p style="font-size: 20px;">3 DDWD</p><hr color="black">
                        <p style="font-size: 1.0rem;">1.  MANIFESTO  MANIFESTOMANIFESTO  MANIFESTO<br>
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
                        <h3>MUHAMMAD IZMEER BIN ZULKIFLEE</h3> 
                        <p style="font-size: 20px;">3 DDWD</p><hr color="black">
                        <p style="font-size: 1.0rem;">1.  MANIFESTO  MANIFESTOMANIFESTO  MANIFESTO<br>
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
                        <h3>MUHAMMAD IZMEER BIN ZULKIFLEE</h3> 
                        <p style="font-size: 20px;">3 DDWD</p><hr color="black">
                        <p style="font-size: 1.0rem;">1.  MANIFESTO  MANIFESTOMANIFESTO  MANIFESTO<br>
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