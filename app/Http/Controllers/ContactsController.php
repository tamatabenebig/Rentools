<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        //
    }
}
