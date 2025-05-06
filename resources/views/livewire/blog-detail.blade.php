<main>
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
          <div class="container">
            <ol>
              <li><a wire:navigate href="{{ route('home') }}">Home</a></li>
              <li><a wire:navigate href="{{ route('blog') }}">Blog</a></li>
              <li class="current">Course Details</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Page Title -->
    <section id="courses-course-details" class="courses-course-details section">
        <div class="container" data-aos="fade-up">
            <div class="row">
            <div class="col-lg-10">
                <h2>{{ $article->title}}</h2>
                <div>
                    <p class="time">
                        {{\Carbon\carbon::parse($article->created_at)->format('d M, Y')}}
                        / Author: <a href="#">{{$article->author}}</a>
                    </p>
                </div>
                <img src="{{asset('storage/' . $article->image)}}" class="img-fluid" alt="">
                <p>
                    {!! $article->content !!}
                </p> 
            </div>    
        </div>
      </div>

    </section><!-- /Courses Course Details Section -->
</main>