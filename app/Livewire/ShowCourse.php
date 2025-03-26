<?php

namespace App\Livewire;
use App\Models\Course;
use Livewire\Component;

class ShowCourse extends Component
{
    public $course;

    public function mount($id)
    {
        $this->course = Course::findOrFail($id);
    }


    public function render()
    {
        return view('livewire.show-course',[
            'course' => $this->course
        ]);
    }
}
