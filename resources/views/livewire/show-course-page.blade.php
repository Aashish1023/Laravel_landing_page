<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Courses</h1>
                 <p class="mb-0">
                    "Discover the art of fashion and transform your creativity into stunning designs with our expert-led courses!"
                </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Courses</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Courses Section -->
    <section id="courses" class="courses section">

      <div class="container">

        <div class="row">
            @if ($courses->isNotEmpty())
                @php
                $x=10;
                @endphp
            @foreach ($courses as $course)

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <x-course-page-card :course="$course" />
            </div> <!-- End Course Item-->

            @endforeach
            @endif

        </div>

      </div>

    </section><!-- /Courses Section -->

</main>