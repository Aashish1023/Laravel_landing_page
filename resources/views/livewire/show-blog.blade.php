<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Events</h1>
              <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Events</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Events Section -->
    <section id="events" class="events section">

      <div class="container" data-aos="fade-up">

        <div class="row">
            @if ($articles->isNotEmpty())
                @foreach ($articles as $article)
                    
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card">
                        <div class="card-img">
                            {{-- <img src="" alt="..."> --}}
                            @if ($article->image != "")
                                <img src="{{ asset('storage/' . $article->image) }}" alt="Post Thubnail">                                                            
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">{{ $article->title }}</a></h5>
                            
                            <p class="fst-italic text-center">{{\Carbon\Carbon::parse($article->created_at)->format('d M, Y')}}</p>
                            <p class="fst-italic text-center">{{ $article->author }}</p>
                            <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                        </div>
                        </div>
                    </div>
                @endforeach

            @endif


        </div>

      </div>

    </section><!-- /Events Section -->

  </main>