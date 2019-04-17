<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ContactsController extends Controller
{
    //

    public function index()
    {
        return view("contacts/index");
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'min:3',
            'job' => 'min:1',
            'comment' => 'min:5',
            'email' => 'email',
            'numbers.*' => 'required'
        ]);
        



        $contact = \App\Contact::create([
            'name' => request('name'),
            'job' => request('job'),
            'comment' => request('comment'),
            'email' => request('email'),
            'category' => request('category')
        ]);

    
        for ($i = 0; $i < count(request('numbers')); $i++)
        {
            \App\PhoneNumbers::create([
                'number' => request('numbers')[$i],
                'contact_id' => $contact->id
            ]);
            
        }

        return redirect('/contacts/all');
    }

    public function add()
    {
        return view("contacts/add");
    }

    public function all()
    {
        $contacts = \App\Contact::orderBy('id', 'DESC')->get();

        return view("contacts/all", compact('contacts'));
    }
}
