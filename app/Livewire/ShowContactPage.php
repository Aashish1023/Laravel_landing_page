<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;    

class ShowContactPage extends Component
{

    public $name = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:1000',
    ];

    public function submit()
    {
        $this->validate();
        // Here you can handle the form submission logic, like sending an email or saving to the database
        // For now, we'll just reset the fields
        // $this->reset(['name', 'email', 'message']);

        // session()->flash('success', 'Your message has been sent successfully!');

        $mailData = [
            'Subject' => 'You Have Received a New Contact Email',
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ];

        Mail::to('andy@example.com')->Send(new ContactEmail($mailData));

        session()->flash('success', 'Your message has been sent successfully!');
        $this->redirect('/contact');
    }


    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
