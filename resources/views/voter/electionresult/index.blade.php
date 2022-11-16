{{-- VOTER ELECTION RESULTS --}}
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
  .box {
  background-color: whitesmoke;
  border: 1px solid lightgrey;
  padding: 20px;
  margin: auto;
  margin-bottom: 50px;
  width: 80%;
  border-radius: 5px;
}

.column2 {
    width: 50%;
    float: left;
    text-align: center;
  
}

.center{
    display: flex;
    justify-content: center;
}

.circle{
    clip-path: circle();
    margin:auto;
}
p{
    margin:auto;
}

</style>
</head>
<body>
<div class="content-margin">
    <div class="row" style="padding-top: 1.5rem;margin: auto; width:100%">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title" style="text-align: center;">Winners In</h2>
                <h2 class="card-title" style="text-align: center;">Student Representative Council Election 2022/2023!</h2><br><br>
            </div>

            <div class="box">
                <h4 class="card-title" style="text-align: center;">General Seat</h3><br>
                <div class="center">
                    <img src="{{ asset('assets/img/winner3.jpg') }}" style="width:100%" class="circle">
                </div>
                <div class="center">  
                    <p><b>Faizul Ahmad Bin Saiful</b></p> 
                </div>
                <div class="center">  
                    <p>School of Professional and Continuing Education</p>
                </div>
                <div class="center">
                    <p>3/DDWP</p>
                </div>
                <br>
            </div>

            <div class="box">
                <h4 class="card-title" style="text-align: center;">Azman Hashim International Business School (AHIBS)</h3><br>
                <div class="center">
                    <img src="{{ asset('assets/img/team-5.jpeg') }}" style="width:100%" class="circle"> 
                </div>
                <div class="center">
                    <p><b>Anushka Roshni Sivakumar</b></p>  
                </div>
                <div class="center">
                    <p>3/DDWB</p> 
                </div>
                <br>
            </div>

            <div class="box">
                <h4 class="card-title" style="text-align: center;">Malaysia-Japan International Institute of Technology (MJIIT)</h3><br>
                <div class="center">
                    <img src="{{ asset('assets/img/team-2.jpg') }}" style="width:100%" class="circle">
                </div>
                <div class="center">
                    <p><b>Muhammad Izmeer Bin Zulkiflee</b></p>  
                </div>
                <div class="center">
                    <p>3/DDWD</p>  
                </div>
                <br>
            </div>

            <div class="box">
                <h4 class="card-title" style="text-align: center;">Razak Faculty of Technology and Informatics (FTIR)</h3><br>
                <div class="center">
                    <img src="{{ asset('assets/img/team-1.jpg') }}" style="width:100%" class="circle"> 
                </div>
                <div class="center">
                    <p><b>Aina Nurain Binti Mohd Aroff</b></p>   
                </div>
                <div class="center">
                    <p>3/DDWD</p> 
                </div>
                <br>
            </div>

            <div class="box">
                <h4 class="card-title" style="text-align: center;">School of Professional and Continuing Education (SPACE)</h3><br>
                <div class="center">
                    <img src="{{ asset('assets/img/winner4.jpeg') }}" style="width:100%" class="circle"> 
                </div>
                <div class="center">
                    <p><b>Mei Xing</b></p>  
                </div>
                <div class="center">
                    <p>3/DDWD</p>  
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection