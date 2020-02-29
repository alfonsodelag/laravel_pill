<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;

class Peoples extends Controller
{
    function list()
    {
        return People::
        orderBy('created_at', 'desc')
        ->take(1)
        ->get();
        return view('userview');
    }
}
