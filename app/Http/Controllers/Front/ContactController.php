<?php

namespace App\Http\Controllers\Front;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function contact()
    {

        return view('front.contact');
    }

    public function sendMessage(Request $request)
    {


        $data = $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|max:50',
            'phone' => 'required|numeric',
            'message' => 'required|string|min:10|max:1000'

        ]);

        Contact::create($data);
        return back()->with('success', 'Thanks , Your message has been send .');
    }
}
