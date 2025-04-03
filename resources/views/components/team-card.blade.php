<div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
    <div class="member-img">
        @if ($member->image != '')
            <img src="{{ asset('storage/'.$member->image) }}" class="img-fluid" alt="">
        @endif    
            
            @if ($member->fb_url != '' || $member->tw_url != "" || $member->in_url !=''  || $member->li_url !='')
            
            <div class="social">

                @if ($member->fb_url != '')
                    <a href="{{ $member->fb_url }}" target="_blank"><i class="bi bi-facebook" ></i></a>
                @endif

                @if ($member->tw_url != '')
                    <a href="{{ $member->tw_url }}"><i class="bi bi-twitter-x"></i></a>
                @endif

                @if ($member->in_url !='')
                    <a href="{{ $member->in_url }}"><i class="bi bi-instagram"></i></a>
                @endif

                @if ($member->li_url !='')
                    <a href="{{ $member->li_url }}"><i class="bi bi-linkedin"></i></a>
                @endif               
            
            </div>

            @endif
    </div>
    <div class="member-info text-center">
        <h4>{{ $member->name }}</h4>
        <span>{{ $member->designation }}</span>
        {{-- <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p> --}}
    </div>
</div><!-- End Team Member -->