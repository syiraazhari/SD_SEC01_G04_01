{{-- ADMIN SIDEBAR CONTENT --}}
<div class="sidebar" data-color="white" data-active-color="danger">
  <div class="logo">
    <a href="/" class="simple-text logo-mini">
      <div class="logo-image-small">
        <img src="{{ asset('assets/img/logo-utm.png') }}">
      </div>
      <!-- <p>CT</p> -->
    </a>
    <a href="/" class="simple-text logo-normal">
      Undi MPP UTMKL
      <!-- <div class="logo-image-big">
        <img src="../assets/img/logo-big.png">
      </div> -->
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="{{ Request::is('adminpanel') ? 'active':'' }} ">
        <a href="{{ url('adminpanel') }}">
          <i class='bx bxs-home-alt-2'></i>
          <p>Home</p>
        </a>
      </li>
      <li class="{{ Request::is('adminpanel/profiles') ? 'active':'' }} ">
        <a href="{{ url('adminpanel/profiles') }}">
          <i class='bx bxs-user'></i>
          <p>Profile</p>
        </a>
      </li>
      <li class="{{ Request::is('adminpanel/votingpage') ? 'active':'' }} ">
        <a href="{{ url('adminpanel/votingpage') }}">
          <i class='bx bxs-book'></i>
          <p>Voting Page</p>
        </a>
      </li>
      <li class="{{ Request::is('') ? 'active':'' }} ">
        <a href="{{ url('') }}">
          <i class='bx bxs-group'></i>
          <p>Candidate</p>
        </a>
      </li>
      <li class="{{ Request::is('mppalumni') ? 'active':'' }} ">
        <a href="{{ url('mppalumni') }}">
          <i class='bx bxs-institution'></i>
          <p>MPP Alumni</p>
        </a>
      </li>
      <li class="{{ Request::is('aboutmpp') ? 'active':'' }} ">
        <a href="{{ url('aboutmpp') }}">
          <i class='bx bxs-info-circle'></i>
          <p>About MPP</p>
        </a>
      </li>
      <li class="{{ Request::is('contact') ? 'active':'' }} ">
        <a href="{{ url('contact') }}">
          <i class='bx bxs-envelope'></i>
          <p>Contact Us</p>
        </a>
      </li>
      <li class="active-pro">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class='bx bxs-arrow-to-right'></i>
          {{ __('Log Out') }}
        </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
          </form>
      </li>
    </ul>
  </div>
</div>

{{-- <div id="sidebar">
  <div class="custom-menu">
    <button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>

  <div class="p-4 pt-5">
  <!--<h1><a href="index.html" class="logo">Splash</a></h1>-->
        <ul class="list-unstyled components mb-5">
          <li class="active">
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">Profile</a>
            </li>
                <li>
              <a href="#">View Election Result</a>
            </li>
        <li>
                <a href="#">MPP Alumni</a>
              </li>
            <li>
                <a href="#">About MPP</a>
          </li>
      <li>
                <a href="#">Contact Us</a>
          </li>
      <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                          {{ __('Log Out') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                  </form>
          </li>
        </ul>

    <div class="footer">
      <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a></p>
    </div>

    </div>
  </div> --}}