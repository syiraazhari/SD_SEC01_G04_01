{{-- CANDIDATE MPP ALUMNI CONTENT --}}
@extends('layouts.candidate')
@extends('layouts.app')

@section('content3')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="../assets/css/contactus.css">
    
<style>
    .banner {
        width: 100%;
        background-image: url(../assets/img/blackgold-4.jpg);
        height: 300px;
        background-color: black;
        background-position: center;
        background-size: 100% 405px; 
        background-repeat:no-repeat;
        margin-bottom: 20px;
    }
    .container{
      display: inline-flex;
      justify-content: center;

    }
    .cards {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      margin: 20px;
      width: 180px;
      height: 15vw;
      padding: 1rem;
    }
    .imgs{
        max-width: 100%; 
        max-height: 100%; 
        display: block;
    }
</style>
</head>
<body>
<div class="content-margin">
    <div class="row" style="padding-top: 0rem;margin: auto; width:100%">
        <div class="col-md-12">

            <div class="banner">
                <div class="centertext">
                    <h1 style="font-size:55px; color: #F8A617; font-weight: 630;">MPP ALUMNI</h1>
                </div>
            </div>

            <section class="mb-4 card card-body" style="border:white;">

            <h2 class="h1-responsive font-weight-bold text-center my-4"> Meet MPP Alumni Team Members </h2>

            <div class="container" style="padding-left: 40px; padding-right: 40px;">
                  
                    <p style="text-align: justify;"> UTM Student Representative Council (SRC) is a Centrer association representing all university registered students. 
                    The SRC is formed through the election process each year to select candidates representing the general and faculty chairs of the university. 
                    All registered students who are pursuing diploma and degree courses are eligible to vote and have the right to elect representatives to fill the general 
                    and faculty seats as their representatives in the SRC. <br><br>
                
                    The Executive Council’s main task is to act as the forefront to the leadership line of MPP UTM. Not only that, the Executive Council also monitors the job scopes and tasks of each department in MPP so that it is well integrated with all the other departments of MPP.  
                    The Executive Council also plays a big role in ensuring that all the tasks being fulfilled are based on the mission of MPP which is our utmost priority.
                    </p> 
                    
            </div><br>

                <h2 class="h1-responsive font-weight-bold text-center my-4">MPP UTM SESSION: 2020/2021</h2>

                <div class="container">
                <div class="cards">
                        <img class="imgs" src="{{ asset('assets/img/mppAlumni-1.jpg') }}">
                        <div style="text-align: center">
                            <h6 style="margin-top: 30px">DANIAL ISKANDAR</h6>
                            <p>PRESIDENT</p>
                        </div>
                </div>
                </div><br><br>

                <div class="container">
                <div class="cards">
                        <img class="imgs" src="{{ asset('assets/img/mppAlumni-2.jpg') }}">
                        <div style="text-align: center">
                            <h6 style="margin-top: 30px">THIVAGAR</h6>
                            <p>VICE-PRESIDENT 1</p>
                        </div>
                </div>
                <div class="cards">
                        <img class="imgs" src="{{ asset('assets/img/mppAlumni-3.jpg') }}">
                        <div style="text-align: center">
                            <h6 style="margin-top: 30px">NURUL IZZAT</h6>
                            <p>VICE-PRESIDENT 2</p>
                        </div>
                </div>
                </div><br><br>

                <div class="container">
                <div class="cards">
                        <img class="imgs" src="{{ asset('assets/img/mppAlumni-4.jpg') }}">
                        <div style="text-align: center">
                            <h6 style="margin-top: 30px">NADRATUL HUDA</h6>
                            <p>GENERAL SECRETARY</p>
                        </div>
                </div>
                <div class="cards">
                        <img class="imgs" src="{{ asset('assets/img/mppAlumni-5.jpg') }}">
                        <div style="text-align: center">
                            <h6 style="margin-top: 30px">AMMAR AIMAN</h6>
                            <p>GENERAL TREASURER</p>
                        </div>
                </div>
                <div class="cards">
                        <img class="imgs" src="{{ asset('assets/img/mppAlumni-6.jpg') }}">
                        <div style="text-align: center">
                            <h6 style="margin-top: 30px">ASDAQUE</h6>
                            <p>PRESIDENT (CAMPUS & COLLEGE)</p>
                        </div>
                </div>
                <div class="cards">
                        <img class="imgs" src="{{ asset('assets/img/mppAlumni-7.jpg') }}">
                        <div style="text-align: center">
                            <h6 style="margin-top: 30px">NUR IKMAL</h6>
                            <p>PRESIDENT (SPORTS & VOLUNTEERING)</p>
                        </div>
                </div>
                </div><br><br><br>

                <div class="container">
                <div class="cards">
                        <img class="imgs" src="{{ asset('assets/img/mppAlumni-8.jpg') }}">
                        <div style="text-align: center">
                            <h6 style="margin-top: 30px">AZIZAH</h6>
                            <p>VICE SECRETARY</p>
                        </div>
                </div>
                <div class="cards">
                        <img class="imgs" src="{{ asset('assets/img/mppAlumni-9.jpg') }}">
                        <div style="text-align: center">
                            <h6 style="margin-top: 30px">NIK SALIHAH</h6>
                            <p>VICE TREASURER</p>
                        </div>
                </div>
                <div class="cards">
                        <img class="imgs" src="{{ asset('assets/img/mppAlumni-10.jpg') }}">
                        <div style="text-align: center">
                            <h6 style="margin-top: 30px">FARHAN</h6>
                            <p>VICE-PRESIDENT (CAMPUS & COLLEGE)</p>
                        </div>
                </div>
                <div class="cards">
                        <img class="imgs" src="{{ asset('assets/img/mppAlumni-11.jpg') }}">
                        <div style="text-align: center">
                            <h6 style="margin-top: 30px">NOORAFHAN</h6>
                            <p>VICE-PRESIDENT (SPORTS & VOLUNTEERING)</p>
                        </div>
                </div>
                </div><br><br><br><br>

                <div class="container">
                <div class="cards">
                        <img class="imgs" src="{{ asset('assets/img/mppAlumni-12.jpg') }}">
                        <div style="text-align: center">
                            <h6 style="margin-top: 30px">ALLANA ELI</h6>
                            <p>PRESIDENT (ADVOCACY & RELATIONS)</p>
                        </div>
                </div>
                <div class="cards">
                        <img class="imgs" src="{{ asset('assets/img/mppAlumni-13.jpg') }}">
                        <div style="text-align: center">
                            <h6 style="margin-top: 30px">TAY JIA YI</h6>
                            <p>PRESIDENT (ACTIVITY & STUDENT DEVELOPMENT)</p>
                        </div>
                </div>
                <div class="cards">
                        <img class="imgs" src="{{ asset('assets/img/mppAlumni-14.jpg') }}">
                        <div style="text-align: center">
                            <h6 style="margin-top: 30px">SYAFIKA</h6>
                            <p>PRESIDENT (ACADEMIC & INDUSTRY)</p>
                        </div>
                </div>
                <div class="cards">
                        <img class="imgs" src="{{ asset('assets/img/mppAlumni-15.jpg') }}">
                        <div style="text-align: center">
                            <h6 style="margin-top: 30px">HAIDAH HAFIZAH</h6>
                            <p>HEAD OF STUDENT WELLBEING</p>
                        </div>
                </div>
                </div><br><br><br><br>

            </section>
        </div>
    </div> 
</div>
</body>
</html>
@endsection