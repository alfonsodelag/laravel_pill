<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;

class Peoples extends Controller
{
    function list()
    {
        $data= People::
        orderBy('created_at', 'desc')
        ->get();
        return view('userview', ['data'=>$data ]);
    }
}
