<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view("client.contact");
    }

    public function contact_traitement(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'name' => ['required', 'string', 'min:2'],
            'email' => ['required', 'email', 'unique:contacts'],
            'message' => ['required', 'string', 'max:1024'],

        ]);

        Contact::create([
            'nom' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);
        return redirect()->route('client.contact');
    }
}
