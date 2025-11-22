<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $email;
    public string $messageText;
    public string $topic;

    public function __construct(string $name, string $email, string $messageText, string $topic)
    {
        $this->name = $name;
        $this->email = $email;
        $this->messageText = $messageText;
        $this->topic = $topic;
    }

    public function build(): self
    {
        return $this->subject('New Contact Message')
            ->replyTo($this->email, $this->name)
            ->view('emails.contact')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'messageText' => $this->messageText,
                'topic' => $this->topic,
            ]);
    }
}