  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a wire:navigate href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        {{-- <h3 class="sitename">NIFT</h3> --}}
                <span style="font-weight: bold; font-size: 2rem; color: #0d6efd;">NIFT</span> {{-- Theme color (Bootstrap primary) --}}
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