<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $subject = '';
    public string $message = '';
    public bool $submitted = false;

    protected array $rules = [
        'name' => 'required|min:2|max:100',
        'email' => 'required|email|max:150',
        'subject' => 'required|min:3|max:150',
        'message' => 'required|min:10|max:2000',
    ];

    protected array $messages = [
        'name.required' => 'Please enter your name.',
        'email.required' => 'Please enter a valid email address.',
        'email.email' => 'The email must be a valid email address.',
        'subject.required' => 'Please enter a message subject.',
        'message.required' => 'Please enter your message details (at least 10 characters).',
    ];

    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function submit(): void
    {
        $this->validate();

        // In production, mail can be sent here via Mail::to(...) or logged
        // logger()->info("Portfolio contact message from: {$this->name} ({$this->email})");

        $this->submitted = true;
        $this->reset(['name', 'email', 'subject', 'message']);
    }

    public function resetForm(): void
    {
        $this->submitted = false;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
