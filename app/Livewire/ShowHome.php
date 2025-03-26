<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;

class ShowHome extends Component
{
    public function render()
    {
        $courses = Course::orderBy('title','ASC')->get();
        return view('livewire.show-home',[
            'courses' => $courses
        ]);
    }
}
