<?php

namespace App\Livewire;
use App\Models\FAQ;
use Livewire\Component;

class ShowFaqPage extends Component
{
    public function render()
    {
        $faqs = FAQ::where('status', 1)->orderBy('question','ASC')->get();
        return view('livewire.show-faq-page',[
            'faqs' => $faqs
        ]);
    }
}
