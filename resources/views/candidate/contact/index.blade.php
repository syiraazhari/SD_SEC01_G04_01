{{-- CANDIDATE CONTACT US CONTENT --}}
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
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1)), url(../assets/img/hero-2.jpg);
        height: 300px;
        background-color: purple;
        background-position: center;
        background-size: 100% 405px; 
        background-repeat:no-repeat;
        margin-bottom: 130px;
    }
</style>
</head>
<body>
    <div class="row" style="margin:auto;">
      
        <div class="col-md-12">
        <!--Section: Contact v.2-->

            <div class="banner">
                <div class="centertext">
                    <h1 style="font-size:50px">Contact Us</h1>
                </div>
            </div>

            <div class="social">
                <ul>
		            <li><a href="https://www.facebook.com/mpputm" target=”_blank”><span></span></a></li>
		            <li><a href="https://twitter.com/mpputm" target=”_blank”><span></span></a></li>
		            <li><a href="https://t.me/mpputm" target=”_blank”><span></span></a></li>
		            <li><a href="https://www.linkedin.com/company/mpputm/" target=”_blank”><span></span></a></li>
		            <li><a href="https://www.instagram.com/mpputm/" target=”_blank”><span></span></a></li>
	            </ul>
            </div>

            <section class="mb-4 card card-body" style="border:white">

                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">We Would Love Your Feedback.</h2>
        
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">We'd really appreciate it if you took some time to rate
                    your experience in using this website. Any comments will be taken into consideration to hopefully better this
                    website in the future. Thank you!
                </p>

                <!--Grid row-->
                <div class="row" style="margin:auto">

                    <!--Grid column-->
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label style="font-size:1.0rem">How would you rate your overall experience?</label> 
                                    <br>
                                    <div class="btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary btn-danger active btn-lg" style="margin-right:15px">
                                            <i class="fa-solid fa-face-frown fa-xl"></i>
                                            <input type="radio" name="feedback" id="poor" autocomplete="off" checked> 
                                        </label>

                                        <label class="btn btn-secondary btn-warning btn-lg" style="margin-right:15px">
                                            <i class="fa-solid fa-face-meh fa-xl"></i>
                                            <input type="radio" name="feedback" id="average" autocomplete="off">
                                        </label>
                            
                                        <label class="btn btn-secondary btn-success btn-lg" style="margin-right:15px">
                                            <i class="fa-solid fa-face-smile fa-xl"></i> 
                                            <input type="radio" name="feedback" id="good" autocomplete="off">
                                        </label>                    
                                    </div>
                                </div>
                            </div>
                        </div><br>
                
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="" style="font-size:1.0rem">Your name</label>
                                </div>
                            </div>

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="" style="font-size:1.0rem">Your email</label>
                                </div>
                            </div>
                        </div><br>
        
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message" style="font-size:1.0rem">Comments / Suggestions / Feedback</label>
                                </div>
                            </div>
                        </div><br>
                        </form>

                    <div class="text-center text-md-left">
                        <a class="button" onclick="document.getElementById('contact-form').submit();">Submit</a>
                    </div>

                    <div class="status"></div>
                </div>
   

                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>UTM KL, Jalan Sultan Yahya Petra, Kampung Datuk Keramat, 
                            54100 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur.</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>mpp@utm.my</p>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div> 
</body>
</html>
@endsection