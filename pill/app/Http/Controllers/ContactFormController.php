<?php

namespace Project\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }
}
