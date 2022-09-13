<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $whatsappnumber;
    public $message;
    public $mailback;
    public $addonwhatsapp;

    public function mound()
    {
        $this->fill(['mailback' => false, 'addonwhatsapp' => false]);
    }

    protected $rules = [
        'name' => 'required|min:4',
        'message' => 'required|min:20',
        'email' => 'required|email',
        'whatsappnumber' => 'required|min:12',
        'mailback' => '',
        'addonwhatsapp' => ''];

    protected $validationAttributes = ['whatsappnumber' => 'whatsapp number'];

    public function updated($field)
    {

        $this->validateOnly($field);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function send()
    {

        $validData = $this->validate();

        dd($validData);

    }
}