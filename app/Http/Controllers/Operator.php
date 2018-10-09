<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operator as Oper;

class Operator extends Controller
{
    public function index() 
    {
        return view('operator', ['operators' => Oper::all()]);
    }
}
