<main class="main">

  <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-4">
              <h1>Our Latest Posts</h1>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li>
              <a wire:navigate href="{{ route('home') }}">Home</a>
            </li>
            <li class="current">Blog</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

  <!-- Blogs Section -->
    <section id="events" class="events section">
      <div class="container" data-aos="fade-up">
        <div class="row">
            @if ($articles->isNotEmpty())
              @foreach ($articles as $article)
                <div class="col-md-6 d-flex align-items-stretch">
                  <div class="card">
                    <div class="card-img">
                      @if ($article->image != "")
                        <img src="{{ asset('storage/' . $article->image) }}" alt="Post Thubnail"  `class="img-fluid">                                                            
                      @endif
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">
                        <a wire:navigate href="{{ route('blogDetail',$article->id) }}">{{ $article->title }}</a>
                      </h5>
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="" class="trainer-link">{{ $article->author }}</a>
                        <p class="time">{{\Carbon\carbon::parse($article->created_at)->format('d M, Y')}}</p>
                      </div>
                          {{-- <p class="description">{{ Str::limit($article->content, 100) }}</p> --}}
                      <p class="description"> {!! Str::limit($article->content, 100) !!} </p>
                    </div>
                  </div>
                </div>
              @endforeach
            @endif
        </div>
      </div>
    </section>
    <!--  /Blogs Section --> 

    <!-- Tabs Section -->
        <section id="tabs" class="tabs section">
          <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
              <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">
                  @if ($categories->isNotEmpty())
                    @foreach ($categories as $category)
                      <li class="nav-item">
                        <a wire:navigate class="nav-link active show" data-bs-toggle="tab" href="{{ route('blog').'?categorySlugS='.$category->slug }}">{{ $category->name}}</a>
                      </li>    
                    @endforeach    
                  @endif
                </ul>
              </div>
              <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">
                  <div class="tab-pane active show" id="tab-1">
                   {{-- <p>Select a category to view articles.</p> --}}
                   
                   <!-- Latest Articles -->
                  <div class="col-lg-6">
                    <div class="widget">
                      <h5 class="widget-title">
                        <span>Latest Article</span>
                      </h5>
                        @if ($latestArticles->isNotEmpty())
                          @foreach ($latestArticles as $latestArticle)
                            <ul class="list-unstyled widget-list">
                              <li class="d-flex widget-post align-items-center">
                                <div class="widget-post-image flex-shrink-0 me-3">
                                  @if ($latestArticle->image != "")
                                    <img src="{{ asset('storage/' . $latestArticle->image) }}" alt="Post Thumbnail" class="img-fluid" style="width: 100px; height: 100px;">
                                  @endif
                                </div>
                                <div class="flex-grow-1">
                                  <h5 class="h6 mb-0">
                                    <a class="text-black" wire:navigate href="{{route('blogDetail',$article->id )}}">{{ $latestArticle->title }}</a>
                                  </h5>
                                  <small>{{ \Carbon\Carbon::parse($latestArticle->created_at)->format('d M, Y') }}</small>
                                </div>
                              </li>
                            </ul>
                          @endforeach
                        @endif
                    </div>
                  </div>
                  <!-- End Latest Articles -->  
             
                </div>
              </div>
            </div>
            {{-- <!-- Latest Articles -->
              <div class="col-lg-3">
                <div class="widget">
                  <h5 class="widget-title">
                    <span>Latest Article</span>
                  </h5>
                    @if ($latestArticles->isNotEmpty())
                      @foreach ($latestArticles as $latestArticle)
                        <ul class="list-unstyled widget-list">
                          <li class="d-flex widget-post align-items-center">
                            <div class="widget-post-image flex-shrink-0 me-3">
                              @if ($latestArticle->image != "")
                                <img src="{{ asset('storage/' . $latestArticle->image) }}" alt="Post Thumbnail" class="img-fluid" style="width: 100px; height: 100px;">
                              @endif
                            </div>
                            <div class="flex-grow-1">
                              <h5 class="h6 mb-0">
                                <a class="text-black" href="blog-details.html">{{ $latestArticle->title }}</a>
                              </h5>
                              <small>{{ \Carbon\Carbon::parse($latestArticle->created_at)->format('d M, Y') }}</small>
                            </div>
                          </li>
                        </ul>
                      @endforeach
                    @endif
                </div>
              </div>
            <!-- End Latest Articles -->   --}}
          </div>
        </div>      
      </section>
    <!-- /Tabs Section -->
        
    <!-- Pagination -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-12">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              {{ $articles->links() }}
            </ul>
          </nav>
        </div>
      </div>
    </div>
</main>