<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    // public function store()
    // {
    //     $data = request()->validate
    //     dd(request()->all());
    // }
}
