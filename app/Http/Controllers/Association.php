<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Association as Assoc, Route};
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
        Alert::success('Success!', 'Association has been deleted.');
        return redirect()->back();
    }

    public function view($id)
    {
        return view('view-association', ['assoc' => Assoc::find($id), 'routes' => Route::where('assoc_id',$id)->get()]);
    }

    public function update(Request $request)
    {
        Assoc::find($request->id)->update($request->all());
        Alert::success('Success!', 'Information has been updated.');
        return redirect()->back();
    }

}
