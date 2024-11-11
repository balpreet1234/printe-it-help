<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactpage()
    {
        return view('frontend.contact');
    }

    public function submitContactForm(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:50',
            'lastName' => 'required|string|max:50',
            'email' => 'required|email|unique:contacts,email', 
            'address' => 'required|string|max:255',
            'contact' => 'required|digits_between:9,10',
            'city' => 'required|string|max:50',
        ], [
            'email.unique' => 'Email already exists', 
        ]);
    
        Contact::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'address' => $request->address,
            'contact' => $request->contact,
            'city' => $request->city,
            'form_type' => $request->form_type,
        ]);

        return back()->with('success', 'Thank you for your enquiry!');
    }
}
