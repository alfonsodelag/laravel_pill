<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;

class Peoples extends Controller
{
    function list()
    {
        return People::all();
    }
}
