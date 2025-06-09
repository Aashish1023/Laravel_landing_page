<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Livewire\WithFileUploads;
use App\Models\Page;
use App\Models\Member;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Contact;
use App\Models\ContactMessage;
use App\Models\ContactForm;
use App\Models\ContactFormField;

class ShowHome extends Component
{
    public function render()
    {
        $courses = Course::orderBy('title','ASC')->get();
        $settings = Setting::where('status', 1)->get();
        return view('livewire.show-home',[
            'courses' => $courses,
            'settings' => $settings,
        ]);
    }
}
