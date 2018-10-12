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
        $this->validateForm($request);
        Assoc::create($request->all());
        Alert::success('Success!', 'A new association has been registered.');
        return redirect()->back();
    }

    public function destroy($id)
    {
        Assoc::find($id)->delete();
        Alert::success('Success!', 'Association has been deleted.');
        return redirect('/association');
    }

    public function view($id)
    {
        return view('view-association', ['assoc' => Assoc::find($id), 'routes' => Route::where('assoc_id',$id)->get()]);
    }

    public function update(Request $request)
    {
        if (!Assoc::where('name_short', '=',$request->name_short)->where('id', '!=', $request->id)->first() || 
            !Assoc::where('name_full', '=',$request->name_short)->where('id', '!=', $request->id)->first()) {
            Assoc::find($request->id)->update($request->all());
            Alert::success('Success!', 'Information has been updated.');
            return redirect()->back();
        } else {
            Alert::error('Error!', 'Association names are already taken.');
            return redirect()->back();
        }
    }

    private function validateForm($request)
    {
        $request->validate([
            'name_short' => 'required|unique:associations',
            'name_full'  => 'required|unique:associations',
            'type'       => 'required|max:255',
            'head'       => 'required|max:255',
            'contact'    => 'required|max:255',
            'color'      => 'required|max:255'
        ],[
            'name_short.required' => 'Association shortname is required.',
            'name_short.unique'   => 'Association shortname must be unique.',
            'name_full.required'  => 'Association name must is required.',
            'name_full.unique'    => 'Association name must be unique.',
        ]);
    }

}
