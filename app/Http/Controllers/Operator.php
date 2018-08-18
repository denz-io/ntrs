<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operator as Oper;
use App\Models\Driver;

class Operator extends Controller
{
    public function show($id)
    {
        return view('view-operator', ['drivers' => Driver::all(), 'operator' => Oper::find($id)]);
    }
}
