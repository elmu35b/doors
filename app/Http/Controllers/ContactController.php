<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    function store(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'phone' => 'required',
            'name' => 'required',
            'message' => 'required',
        ]);
        // return $request;
        Contact::create([
            'email' => $request->email,
            'phone' => $request->phone,
            'name' => $request->name,
            'message' => $request->message,
        ]);

        Session::flash('message', 'success');
        return to_route('welcome')->withFragment('#vujade_contact');
        // return redirect()->route('welcome')->with(['message'=> 'success']);
        // return response()->json(['message' => 'success'], 200,);
    }
}
