<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TricycleRegistration extends Controller
{
    public function index() 
    {
        return view('tricycle-registration');
    }
}
