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
        $this->validateForm($request);
        User::create($request->all());
        Alert::success('Success!', 'User created succesfully.');
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $update = $request->all();
        $update['is_admin'] = $request->is_admin ?? 0;
        if (!User::where('username', '=',$request->username)->where('id', '!=',$request->id)->first()) {
            User::find($request->id)->update($update);
            Alert::success('Success!', 'User info updated succesfully.');
            return redirect()->back();
        } else {
            Alert::error('Error!', 'Username has already been taken.');
            return redirect()->back();
        }
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

    private function validateForm($request)
    {
        $request->validate([
            'username'  => 'required|unique:users',
            'fname'     => 'required|max:255',
            'lname'     => 'required|max:255',
            'password'  => 'required|max:255'
        ],[
            'username.required'  => 'Username is required.',
            'username.unique'    => 'Username already exist.',
            'fname.required'     => 'First name is required.',
            'lname.required'     => 'Last name is required.',
        ]);
    }
}
