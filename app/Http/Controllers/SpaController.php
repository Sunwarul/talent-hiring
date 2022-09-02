<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function __call($method, $parameters)
    {
        return view('spa');
    }
}
