<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Course;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts=Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }

    public function create()
    {
        return view('home.contact');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validatedData);

        return redirect()->back()->with('success', 'Message envoyé avec succés!');
    }

    public function destroy(Contact $contact) {
        $contact->delete();
        return redirect()->back()->with('success', 'Message supprimé avec succés!');
    }
}
