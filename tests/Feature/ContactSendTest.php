<?php

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

it('sends contact email and redirects with flash', function () {
    Mail::fake();

    $response = $this->post('/contact', [
        'name' => 'Tester',
        'email' => 'tester@example.com',
        'message' => 'Hello world',
        'topic' => 'tech',
    ]);

    $response->assertRedirect('/contact');
    $response->assertSessionHas('success');

    Mail::assertSent(ContactMessage::class, function ($mail) {
        return $mail->name === 'Tester' && $mail->email === 'tester@example.com' && $mail->topic === 'tech';
    });
});