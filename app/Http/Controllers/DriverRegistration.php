<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverRegistration extends Controller
{
    public function show($id) 
    {
        return view('driver-registration');        
    }
}
