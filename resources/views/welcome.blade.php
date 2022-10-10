<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UndiMPP UTMKL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <img src="{{ asset('assets/img/logo-utmxjpmpp.png') }}">
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="#hero"><span>HOME</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              {{-- Dashboard Button // Only appear when user logged in --}}
              @if (Auth::check())
                @if (Auth::user()->role_as == '0')
                  <li><a href="voter">Dashboard</a></li>
                @endif
                @if (Auth::user()->role_as == '1')
                  <li><a href="adminpanel">Dashboard</a></li>
                @endif
                @if (Auth::user()->role_as == '2')
                  <li><a href="candidate">Dashboard</a></li>
                @endif
              @endif
                
              <li><a href="#about">About</a></li>
              <li><a href="#services">Benefits</a></li>
              <li><a href="#contact">Contact</a></li>
              {{-- Log out button only show if user is authenticated(already login)--}}
              @if (Auth::check())
                @if ((Auth::user()->role_as == '0') || (Auth::user()->role_as == '1') || (Auth::user()->role_as == '2'))
                  <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </li>
                @endif
              @endif
            </ul>
          </li>
                @guest
                    @if (Route::has('login'))
                         <li><a class="nav-link scrollto" href="{{ route('login') }}">{{ __('LOGIN') }}</a></li>
                    @endif

                    @if (Route::has('register'))
                         <li><a class="nav-link scrollto" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                            
                    @endif
                        @else
                @endguest
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">
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

  <main id="main">

    <!-- ======= About UndiMPP UTMKL Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>About UndiMPP UTMKL</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
            
                <iframe width="560" height="315" src="https://www.youtube.com/embed/UMmFxe-jGyY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
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
                <ul>
                  <li>
                    <i class="bi bi-check" style="color: #ed9e00fd"></i> Cost Savings and Efficiency
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

    <!-- ======= Benefits Section ======= -->
    <div id="services" class="services-area area-padding" style="background-color: #FEF1BE;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Benefits</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon">
                    <i class="bi bi-briefcase"></i>
                  </a>
                  <h4>Cost Savings & Efficiency</h4>
                  <p>
                  Switching to web-based online voting systems from more expensive and less efficient voting technologies will reap these benefits without increasing risk.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon">
                    <i class="bi bi-card-checklist"></i>
                  </a>
                  <h4>Voter Accessibility</h4>
                  <p>
                  Tapping a link on your mobile device that securely logs you into the online voting system website is an example of a vote or election with high accessibility.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon">
                    <i class="bi bi-bar-chart"></i>
                  </a>
                  <h4>Security, Confidence, and Trust</h4>
                  <p>
                  The confidence in your voting and election results is by far the most valuable aspect that online voting systems will offer to your group.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div><!-- Benefits Section -->

    <!-- ======= Testimonials Section ======= -->
    <div id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/team-1.jpg" class="testimonial-img" alt="">
                <h3>Aina Nurain</h3>
                <h4>Project Leader</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  We have been very happy with our new website! It looks professional and very easy to navigate.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/team-2.jpg" class="testimonial-img" alt="">
                <h3>Muhammad Izmeer</h3>
                <h4>Developer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  We were very pleased with UndiMPP and the overall development process for our website. Not only the website exceed our expectations but the added value provided by our team was amazing.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/team-3.jpeg" class="testimonial-img" alt="">
                <h3>Aina Amisha</h3>
                <h4>Developer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  It has been a pleasure working with UndiMPP UTMKL team members. I appreciate every dedication to the project that me and my team are on.  
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/team-4.jpg" class="testimonial-img" alt="">
                <h3>Iskandar Hakimi</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Awesome, Awesome website!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/team-5.jpeg" class="testimonial-img" alt="">
                <h3>Anushka Roshni</h3>
                <h4>Documentation Specialist</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Thank you so much for the report! I think our system and election campaign is performing extremely well.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/team-6.jpeg" class="testimonial-img" alt="">
                <h3>Afiq Irfan</h3>
                <h4>Documentation Specialist</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I love the energy and excitement my UndiMPP UTMKL team exhibits toward the success of our product.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-phone"></i>
                  <p>
                    Call: +60 196120403<br>
                    <span>Monday-Friday (9am-5pm)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    Email: jpmpputm@utm.my<br>
                    <span>Web: www.utm.my/mpp</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-geo-alt"></i>
                  <p> 
                    Location: Jalan Sultan Yahya Petra, Kampung Datuk Keramat 54100 Kuala Lumpur <br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>Undi</span>MPP UTMKL</h2>
                </div>

                <p>We realize that the enthusiasm possessed by students is a power to create change. The idealism and freedom of the soul possessed are the basis for moving on the basis of truth.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/jpmpputm21/about"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="https://twitter.com/jpmpputm?lang=en"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/jpmpputm/"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/company/mpputm/"><i class="bi bi-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                If you require any further information, feel free to contact us.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +60 196120403</p>
                  <p><span>Email:</span> jpmpputm@utm.my</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="https://www.instagram.com/p/CY6wOnvluCP/"><img src="assets/img/jpmpp-ig1.png" alt=""></a>
                  <a href="https://www.instagram.com/p/CY6w7iAljCa/"><img src="assets/img/jpmpp-ig2.png" alt=""></a>
                  <a href="https://www.instagram.com/p/CY6oqFMFCog/"><img src="assets/img/jpmpp-ig3.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>UndiMPP UTMKL</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main(home page).js"></script>

</body>

</html>