<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;

#[Layout('components.layout')]
#[Title('Contact Us - Off Broadway Children\'s Theatre')]
class Contact extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $message = '';
    public $sent = false;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'nullable',
        'message' => 'required|min:10',
    ];

    public function submit()
    {
        $this->validate();

        // Send email
        $recipient = Setting::get('email', 'offbroadway@msn.com');

        Mail::raw($this->message, function ($mail) use ($recipient) {
            $mail->to($recipient)
                ->subject('Contact from ' . $this->name)
                ->replyTo($this->email);
        });

        $this->sent = true;
        $this->reset(['name', 'email', 'phone', 'message']);
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
