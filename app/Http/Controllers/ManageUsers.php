<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class ManageUsers extends Controller
{
    public function index()
    {
        return view('manage-users', [ 'users' => User::all()->where('is_admin','!=',2)]);
    }

    public function store(Request $request)
    {
        User::create($request->all());
        Alert::success('Success!', 'User created succesfully.');
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $update = $request->all();
        $update['is_admin'] = $request->is_admin ?? 0;
        User::find($request->id)->update($update);
        Alert::success('Success!', 'User info updated succesfully.');
        return redirect()->back();
    }

    public function settingsUpdate(Request $request)
    {
        User::find($request->id)->update($request->all());
        Alert::success('Success!', 'Your info has been updated.');
        return redirect()->back();
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        Alert::success('Success!', 'User deleted succesfully.');
        return redirect()->back();
    }
}
