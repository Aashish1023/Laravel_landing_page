<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;

class ShowCoursePage extends Component
{
    public function render()
    {
        $courses = Course::orderBy('title','ASC')->get();

        return view('livewire.show-course-page',[
            'courses' => $courses
        ]);
    }
}
