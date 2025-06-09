<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Setting;
use Livewire\WithFileUploads;   

class ShowSetting extends Component
{
    public function render()
    {
        return view('livewire.show-setting',[
        ]);
    }
}
