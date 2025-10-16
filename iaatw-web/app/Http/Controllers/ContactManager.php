<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; 
use Illuminate\Support\Facades\Mail;

class ContactManager extends Controller
{
    public function store(Request $request)
    {
       
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        Mail::raw($request->message, function ($message) use ($request){
            $message->to('rafadimas29@gmail.com');
            $message->subject('You received a message from ' . $request->name);
            $message->from($request->email, $request->name);
        });
        
        Log::info('New contact message:', [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        return back()->with('success', 'Your message has been sent successfully! Thank you.');
    }
}