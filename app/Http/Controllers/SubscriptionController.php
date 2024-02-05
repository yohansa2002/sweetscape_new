<?php

namespace App\Http\Controllers;
use App\Models\Subscriber;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscriptions',
        ]);

        $subscriber = Subscriber::create([
            
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'country' => $request->input('country'),
        ]);

        // You may send a confirmation email or perform other actions here.

        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }
}
