<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $whatsappnumber;
    public $message;
    public $mailback;
    public $addonwhatsapp;

    protected $rules = [
        'name' => 'required|min:4',
        'message' => 'required|min:20',
        'email' => 'required|email',
        'whatsappnumber' => 'required|min:10',
        'mailback' => '',
        'addonwhatsapp' => ''];

    protected $validationAttributes = ['whatsappnumber' => 'whatsapp number'];

    public function updated($field)
    {

        $this->validateOnly($field);
    }

    public function send()
    {

        $validData = $this->validate();

        if (!Contact::create($validData)) {
            return redirect()->back()->withInput();
        }

        return redirect('/');

    }

    public function render()
    {
        return view('livewire.contact-form');
    }

}