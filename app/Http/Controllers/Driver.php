<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver as Drive;
use RealRashid\SweetAlert\Facades\Alert;

class Driver extends Controller
{
    public function index()
    {
        return view('drivers', ['drivers' => Drive::all()]);
    }

    public function destroy($id)
    {
        Drive::find($id)->delete();
        Alert::success('Success!','Driver was deleted.');
        return redirect()->back();
    }
}
