<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        $recipient = null;
        if (\Illuminate\Support\Facades\Schema::hasTable('settings')) {
            $recipient = Setting::query()->where('key', 'contact_recipient')->value('value');
        }
        if (! $recipient) {
            $recipient = config('mail.from.address');
        }

        Mail::to($recipient)->send(
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
