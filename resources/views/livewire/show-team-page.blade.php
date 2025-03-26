<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
                <h1>Our Team</h1>
                <p class="mb-0">
                    Empowering creativity through technology, Our Teams are here to turn ideas into reality.
                </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a wire:navigate href="{{ route('home') }}">Home</a></li>
            <li class="current">Our Team</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- team Section -->
    <section id="trainers" class="section trainers">

      <div class="container">

        <div class="row gy-5">
            @if($members->isNotEmpty())
                @foreach ($members as $member)
                    <x-team-card :member="$member" />
                @endforeach
            @endif

        </div>

      </div>

    </section><!-- /team Section -->

</main>