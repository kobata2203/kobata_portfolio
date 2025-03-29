<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        // メール送信処理
        Mail::raw($validated['message'], function($message) use ($validated) {
            $message->to('your-email@example.com') // ここにあなたのメールアドレスを設定してください
                   ->subject('お問い合わせ: ' . $validated['subject'])
                   ->from($validated['email'], $validated['name']);
        });

        return redirect()->route('contact')
            ->with('success', 'お問い合わせを受け付けました。内容を確認次第、ご連絡させていただきます。');
    }
}