<div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
    <div class="course-item">
      <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
      <div class="course-content">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <p class="category">{{ $course->title }}</p>
        </div>
        <h3><a wire:navigate href="{{ route('coursePage',$course->id) }}">{{ $course->title }}</a></h3>
        <p class="description">{{ $course->short_desc }}</p>
        <div class="trainer d-flex justify-content-between align-items-center">
          <div class="trainer-profile d-flex align-items-center">
            <img src="assets/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
            <a href="" class="trainer-link">Antonio</a>
          </div>
          <div class="trainer-rank d-flex align-items-center">
            <i class="bi bi-person user-icon"></i>&nbsp;{{ $x}}
            &nbsp;&nbsp;
            <i class="bi bi-heart heart-icon"></i>&nbsp;65
          </div>
        </div>
      </div>
    </div>
    
  </div>