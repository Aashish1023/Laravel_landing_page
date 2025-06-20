<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ $title ?? 'Home Page' }}</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  {{-- <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> --}}

  <!-- Vendor CSS Files -->
  <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('front/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('front/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('front/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('front/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('front/css/main.css')}}" rel="stylesheet">

  @livewireStyles
</head>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a wire:navigate href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="">
        {{-- <h3 class="sitename">NIFT</h3> --}}
                <span style="font-weight: bold; font-size: 2rem; color: #dc50c3;">N</span>
                <span style="font-weight: bold; font-size: 2rem; color: #000000;">IFT</span> {{-- Theme color (Bootstrap primary) --}}
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a wire:navigate href="{{ route('home')}}" class="active">Home<br></a></li>
          <li><a wire:navigate href="{{ route("page",1) }}"><b>About Us</b></a></li>
          <li><a wire:navigate href="{{ route('coursesPage')}}" ><b>Courses</b></a></li>
          <li><a wire:navigate href="{{ route('teamPage') }}"><b>Our Team</b></a></li>
          <li><a wire:navigate href="{{ route('blog')}}"><b>Blog</b></a></li>
          <li><a wire:navigate href="{{ route('faqs')}}"><b>FAQ</b></a></li>
          {{-- <li class="dropdown"><a href="#"><span>Events</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> --}}
          <li><a wire:navigate href="{{ route('contact') }}"><b>Contact</b></a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="courses.html">Get Started</a>

    </div>
  </header>


  {{ $slot }}




  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="#" class="logo d-flex align-items-center">
            <span class="sitename">NIFT</span>
          </a>
          <p><strong>National Institute of Art & Fashion Technology</strong></p>
          <div class="footer-contact pt-3">
            <strong>Address:</strong>
            <a href="https://maps.app.goo.gl/G2k2xAqMg8HfL86x5" target="_blank">
              <p>
                <b>Yala Road Kupondole, Lalitpur Nepal</b>
              </p>
            </a>
            <p class="mt-3"><strong>Phone:</strong> <span>+977 984-9336410
            </span></p>
            <p><strong>Email:</strong> 
              <a href="mailto:nift.edu8@gmail.com?subject=Inquiry%20from%20Website&body=Dear%20Fashion%20Institute,">
                 nift.edu8@gmail.com
              </a>
           </p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a wire:navigate href="{{ route("page",2) }}">About us</a></li>
            <li><a href="{{ route("teamPage") }}">Our Teams</a></li>
            <li><a href="{{ route("page",2) }}">Terms of service</a></li>
            <li><a href="{{ route("page",2) }}">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            @foreach (getCourses() as $course)
              <li><a wire:navigate href="{{ route('coursePage',$course->id)}}"> {{ $course->title}}</a></li>
            @endforeach
          </ul>
        </div>

        {{-- <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Join us and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div> --}}

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">NIFT Nepal</strong> <span>All Rights Reserved</span></p>
      <div class="credits">      
        Designed and Developed by
        <a href="https://www.linkedin.com/in/ashish-maharjan-4b40022a3/" target="_blank">
          Ashish Maharjan
        </a> | 
        <a href="https://www.linkedin.com/in/goma-silwal-8b7b54293/" target="_blank">
          Goma Silwal
        </a>
        Distributed by <a href="#">NIFT Nepal
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('front/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('front/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('front/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('front/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('front/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('front/js/main.js')}}"></script>

  @livewireScripts

</body>

</html>
