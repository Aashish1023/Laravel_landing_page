<main>
    <!-- FAQ 3 - Bootstrap Brain Component -->
<section class="bsb-faq-3 py-3 py-md-5 py-xl-8">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
          <h2 class="mb-4 display-5 text-center">Frequently Asked Questions</h2>
          <p class="text-secondary text-center lead fs-4">Welcome to our FAQ page, your one-stop resource for answers to commonly asked questions.</p>
          <p class="mb-5 text-center">Whether you're a new customer looking to learn more about what we offer or a long-time user seeking clarification on specific topics, this page has clear and concise information about our products and services.</p>
          <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
        </div>
      </div>
    </div>
  
    <!-- FAQs: My Account -->
    <div class="mb-8">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-11 col-xl-10">
            <div class="d-flex align-items-end mb-5">
              <i class="bi bi-person-gear me-3 lh-1 display-5"></i>
              <h3 class="m-0">Your Account</h3>
            </div>
          </div>
          <div class="col-11 col-xl-10">
            <div class="accordion accordion-flush" id="faqAccount">
                @if ($faqs->isNotEmpty())
                @php
                    $x=1;
                @endphp
                @foreach ($faqs as $faq)
                    <div class="accordion-item bg-transparent border-top border-bottom py-3">
                        <h2 class="accordion-header" id="faqAccountHeading-{{ $x }}">
                            <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccountCollapse-{{ $x }}" aria-expanded="false" aria-controls="faqAccountCollapse-{{ $x }}">
                                {{!! $faq->question !!}}
                            </button>
                        </h2>
                        <div id="faqAccountCollapse-{{ $x }}"> class="accordion-collapse collapse" aria-labelledby="faqAccountHeading-{{ $x }}">
                            <div class="accordion-body">
                                <p>
                                    {{!! $faq->answer !!}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @php
                        $x++;
                    @endphp
                @endforeach    
                @endif
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section> 
</main>