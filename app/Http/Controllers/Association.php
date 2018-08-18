<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Association as Assoc;
use RealRashid\SweetAlert\Facades\Alert;

class Association extends Controller
{
    public function index()
    {
        return view('/association', ['associations' => Assoc::all()]);
    }

    public function store(Request $request)
    {
        Assoc::create($request->all());
        Alert::success('Success!', 'A new association has been registered.');
        return redirect()->back();
    }

    public function destroy($id)
    {
        Assoc::find($id)->delete();
        Alert::success('Success!', 'Item has been deleted.');
        return redirect()->back();
    }
}
