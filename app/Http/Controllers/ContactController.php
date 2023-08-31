<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'phone' => ['required', 'min:7', 'max:255'],
            'message' => ['required'],
        ]);
        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message
        ]);

        return redirect()->route('contact')->with('success', 'Message sent successfully!');
    }
}
