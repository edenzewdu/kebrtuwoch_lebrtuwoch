<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function showForm()
    {
        return view('subscribe');
    }

    public function store(Request $request)
    {
        // Validate email
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        // Store email in the database
        Subscriber::create([
            'email' => $request->email,
        ]);

        // Redirect with a success message
        return redirect()->route('subscribe.showForm')->with('message', 'Thank you for subscribing!');
    }
}
