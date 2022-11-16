{{-- MAIN VOTER CONTENT --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UndiMPP UTMKL</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css(home page)/style.css" rel="stylesheet">
  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

  <style>
  .ul-style {
    list-style-position: inside;
    padding-left: 0; 
    margin: 0;}
  .li-style {
    padding-top:0;
    padding-bottom: 0; }
  </style>

</head>

<body>

@extends('layouts.voter')
@extends('layouts.app')

@section('content4')

<div class="content-margin" style="width:100%">
    <div class="row" style="padding-top: 0rem;margin: auto; width:100%">
<section id="hero" style="width: 100%;">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-1.jpeg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Imagine Something Better</h2>
                <p class="animate__animated animate__fadeInUp">"One of the definitions of cast is to  register to a VOTE"</p>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Vote Your Voice</h2>
                <p class="animate__animated animate__fadeInUp">Raise your Voice, Cast your Vote</p>
              </div>
            </div>
          </div>            

          <div class="carousel-item" style="background-image: url(assets/img/hero-3.png);">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">GO VOTE!</h2>
                <p class="animate__animated animate__fadeInUp">Who wins? You decide.</p>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

<!-- ======= About UndiMPP UTMKL Section ======= -->
<div id="about" class="about-area area-padding">
  <div class="container">
    <div class="row" style="justify-content:center; margin-left:100px">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>About UndiMPP UTMKL</h2>
        </div>
      </div>
    </div>
    <div class="row" style="justify-content:center; margin-left:100px">
      <!-- single-well start-->
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="well-left">
          <div class="single-well">
            <iframe width="400px" height="350px"  src="https://www.youtube.com/embed/UMmFxe-jGyY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
          </div>
        </div>
      </div>
      <!-- single-well end-->
      <div class="col-md-6 col-sm-6 col-xs-12" style="position: relative">
        <div class="well-middle">
          <div class="single-well">
            <a href="#">
              <h4 class="sec-head">MPP Voting System</h4>
            </a>
            <p>
              This system will mainly focus on providing a platform for UTM students to vote and represent themselves. 
              This system can provide information regarding each candidate, allows a discrete voting procedure as well as providing an easy vote calculation. 
              The system is available through a web-server and requires internet connection.
            </p>
            <ul class="ul-style">
              <li>
                <i class="bi bi-check li-style" style="color: #ed9e00fd"></i> Cost Savings and Efficiency
              </li>
              <li>
                <i class="bi bi-check" style="color: #ed9e00fd"></i> Voter Accessibility
              </li>
              <li>
                <i class="bi bi-check" style="color: #ed9e00fd"></i> Auditability and Verifiability
              </li>
              <li>
                <i class="bi bi-check" style="color: #ed9e00fd"></i> Security, Confidence, and Trust in Your Election Results
              </li>
              <li>
                <i class="bi bi-check" style="color: #ed9e00fd"></i> Make Quality Products
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End col-->
    </div>
  </div>
</div><!-- About UndiMPP UTMKL Section -->
</div>
</div>
         
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main(home page).js"></script>

@endsection