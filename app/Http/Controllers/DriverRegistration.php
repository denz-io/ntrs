<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use RealRashid\SweetAlert\Facades\Alert;

class DriverRegistration extends Controller
{
    public function store(Request $request) 
    {
        Driver::create($request->all());
        Alert::success('Success','Driver has been registered');
        return redirect()->back();
    }

    public function update(Request $request)
    {
        Driver::find($request->id)->update($request->all());
        Alert::success('Success','Driver information was updated.');
        return redirect()->back();
    }

    public function destroy($id)
    {
        Driver::find($id)->delete();
        Alert::success('Success','Driver has been deleted.');
        return redirect()->back();
    }
}
