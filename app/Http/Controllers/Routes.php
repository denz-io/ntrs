<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;
use RealRashid\SweetAlert\Facades\Alert;

class Routes extends Controller
{
    public function index() 
    {
        return view('routes', ['routes' => Route::all()]);
    }

    public function store(Request $request)
    {
        Route::create($request->all());
        Alert::success('Success!', 'Route has been registered.');
        return redirect()->back();
    }

    public function update(Request $request)
    {
        Route::find($request->id)->update($request->all());
        Alert::success('Success!', 'Route has been updated.');
        return redirect()->back();
    }

    public function destroy($id)
    {
        Route::find($id)->delete();
        Alert::success('Success!', 'Route has been deleted.');
        return redirect()->back();
    }
}
