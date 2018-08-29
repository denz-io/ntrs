<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver as Drive;

class Driver extends Controller
{
    public function index()
    {
        return view('drivers', ['drivers' => Drive::all()]);
    }
}
