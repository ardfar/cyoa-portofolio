<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
            'topic' => ['nullable', 'string', 'max:50'],
        ]);

        $topic = $validated['topic'] ?? 'general';

        Mail::to('farrasarrafi5b@gmail.com')->send(
            new ContactMessage(
                $validated['name'],
                $validated['email'],
                $validated['message'],
                $topic
            )
        );

        if ($request->expectsJson()) {
            return response()->json(['status' => 'ok']);
        }

        return redirect()->route('contact')->with('success', 'Pesan berhasil dikirim! Saya akan segera menghubungi Anda.');
    }
}