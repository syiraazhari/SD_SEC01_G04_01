{{-- VOTER ABOUT MPP CONTENT --}}
@extends('layouts.voter')
@extends('layouts.app')

@section('content4')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="../assets/css/contactus.css">
    
<style>
    .banner {
        width: 100%;
        background-image: url(../assets/img/blackgold.jpg);
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
      transition: 0.3s;
      width: 40%;
      margin: 20px;
      padding: 20px;
    }
</style>
</head>
<body>
    <div class="row" style="margin:auto;">
      
        <div class="col-md-12">

            <div class="banner">
                <div class="centertext">
                    <h1 style="font-size:45px; color: #F8A617; font-weight: 630;">MAJLIS PERWAKILAN PELAJAR (MPP) UTM</h1>
                </div>
            </div>

            <section class="mb-4 card card-body" style="border:white">

                <h2 class="h1-responsive font-weight-bold text-center my-4">About Us</h2>

                <div class="container" style="padding-left: 40px; padding-right: 40px;">
                  
                    {{-- <p style="text-align: justify;"> Majlis Perwakilan Perwakilan (MPP) adalah persatuan induk yang mewakili seluruh mahasiswa berdaftar Universiti.  
                    MPP dibentuk melalui proses pemilihan setiap tahun bagi memilih calon yang mewakili kerusi umum dan kerusi fakulti di Universiti.  
                    Semua mahasiswa berdaftar yang sedang mengikuti kursus di peringkat diploma dan ijazah layak bertanding dan berhak mengundi untuk memilih wakil 
                    bagi mengisi kerusi umum dan kerusi fakulti sebagai wakil mereka di MPM.<br><br>

                    Pelbagai kegiatan berbentuk akademik dan bukan akademik dikendalikan oleh MPP.  Antaranya, konvensyen, seminar, khidmat masyarakat, bengkel dan sebagainya.  
                    Setiap mahasiswa digalakkan menyertai aktiviti yang dianjurkan oleh MPP. Ini bertujuan memberi peluang para mahasiswa berkenalan dan mengeratkan 
                    tali silaturahim sesama mahasiswa yang terdiri daripada pelbagai bangsa dan agama. Selain itu, penyertaan ini dapat mewujudkan semangat kerjasama antara 
                    mahasiswa yang berlainan fakulti. </p> --}}
                    @foreach ($about as $item)
                      <p style="text-align: justify;">{{ $item->content }}</p>
                    @endforeach
                  </div>  
                <br>

                <h2 class="h1-responsive font-weight-bold text-center my-4">Vision & Mission</h2>

                <div class="container">
                  <div class="cards">
                    <h3 style="font-weight: 600">VISION</h3>
                    <p style="text-align: justify;"> Offer a significant contrast of dynamic service through action towards the welfare of UTMians and Malaysia. Empower the soft skills throughout all aspects 
                      among the students to ensure the quality and marketability of students and thus enable the students to become the catalyst for country development. </p>
                  </div>  
                  <div class="cards" style="background-color: #F8A617;">
                    <h3 style="color: white; font-weight: 600;">MISSION</h3>
                    <p style="color: white; text-align: justify;"> Expand and fasten the coverage of the current issue with accuracy and act as a medium to represent the students’ voice to solve their problems 
                      through maximum transparency and develop the student leader with integrity characteristics. </p>       
                  </div> 
                </div><br>

                <h2 class="h1-responsive font-weight-bold text-center my-4">Get-To-Know: MPP</h2>

                <div class="container" style="margin-top: 20px;">
                  <iframe width="500" height="315" src="https://www.youtube.com/embed/UMmFxe-jGyY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                  clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <img src="{{ asset('assets/img/mpp.png') }}" style="max-width: 50%; height: auto;">
                </div><br>


                <h2 class="h1-responsive font-weight-bold text-center my-4">Our Core Value</h2>

                <div class="container">
                  <div class="cards">
                    <h3 style="font-weight: 450">EXAMPLARY</h3>
                    <p > Showing an exemplary behaviour with adaption of various merits and values in order to be worthy of imitation. </p>
                  </div>  
                  <div class="cards" style="background-color: #F8A617;">
                    <h3 style="font-weight: 450; color: white">RESILIENCE</h3>
                    <p style="color: white"> Being creative and efficient with problems, issues or situations require taking the right and proper action in a short period of time. </p>       
                  </div> 
                  <div class="cards">
                    <h3 style="font-weight: 450;">ENERGETIC</h3>
                    <p> Staying passionate and energetic in working as it can be a form of measurement of ability. </p>       
                  </div> 
                  <div class="cards" style="background-color: #F8A617;">
                    <h3 style="font-weight: 450; color: white">VISION</h3>
                    <p style="color: white"> Able to visionize the most efficient things that needed to be done. The message must be shared in a meaningful, actionable, and engaging way. </p>       
                  </div> 
                </div><br>

            </section>
        </div>
    </div> 
</body>
</html>
@endsection