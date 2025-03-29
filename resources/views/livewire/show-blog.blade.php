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
            <li><a wire:navigate href="{{ route('home') }}">Home</a></li>
            <li class="current">Blog</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Events Section -->
    {{-- 
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
    </section>--}}
    <!-- /Events Section --> 
    

        <!-- blog Section -->
        <section id="blog" class="blog section">

          <div class="container">
    
            <div class="row">
              @if ($articles->isNotEmpty())
                @foreach ($articles as $article)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="course-item">
                    @if ($article->image != "")
                      <img src="{{ asset('storage/' . $article->image)}}" class="img-fluid" alt="...">
                    @endif
                    <div class="course-content">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <p class="category">{{ $article->title}}</p>
                        {{-- <p class="price">$169</p> --}}
                        <p class="time">{{\Carbon\carbon::parse($article->created_at)->format('d M, Y')}}</p>
                      </div>
                      <h3><a href="course-details.html">{{ $article->title}}</a></h3>
                      <p class="description">{{ Str::limit($article->content, 100) }}</p>
                      <div class="trainer d-flex justify-content-between align-items-center">
                        <div class="trainer-profile d-flex align-items-center">
                          <img src="assets/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
                          <a href="" class="trainer-link">{{ $article->author }}</a>
                        </div>
                        <div class="trainer-rank d-flex align-items-center">
                          {{-- <i class="bi bi-person user-icon"></i>&nbsp;50
                          &nbsp;&nbsp;
                          <i class="bi bi-heart heart-icon"></i>&nbsp;65 --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>    
                @endforeach  
              @endif
              
              <!-- End Course Item-->
  
            </div>
    
          </div>
    
        </section><!-- /blog Section -->

        <!-- Tabs Section -->
        <section id="tabs" class="tabs section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
      
              <div class="row">
                <div class="col-lg-3">
                  <ul class="nav nav-tabs flex-column">
                    @if ($categories->isNOtEmpty())
                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="{{ route('blog').'?category='.$category->slug }}">{{ $category->name}}</a>
                            </li>    
                        @endforeach    
                    @endif
                    
                   
                  </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                  <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                      <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                          <h3>Architecto ut aperiam autem id</h3>
                          <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                          <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                          <img src="assets/img/tabs/tab-1.png" alt="" class="img-fluid">
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab-2">
                      <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                          <h3>Et blanditiis nemo veritatis excepturi</h3>
                          <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                          <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                          <img src="assets/img/tabs/tab-2.png" alt="" class="img-fluid">
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                      <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                          <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                          <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                          <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                          <img src="assets/img/tabs/tab-3.png" alt="" class="img-fluid">
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab-4">
                      <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                          <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                          <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                          <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                          <img src="assets/img/tabs/tab-4.png" alt="" class="img-fluid">
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab-5">
                      <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                          <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                          <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                          <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                          <img src="assets/img/tabs/tab-5.png" alt="" class="img-fluid">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
      
          </section><!-- /Tabs Section -->

  </main>