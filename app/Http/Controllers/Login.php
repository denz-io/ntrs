<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class Login extends Controller
{
    public function index() 
    {
       return view('login'); 
    }

    public function store(Request $request)
    {
        if ($user = User::where('username', $request->username)->first()) {
            if(strcmp($request->username, $user->username) == 0) {
                if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
                    return redirect('/home');
                }
                return redirect()->back()->withErrors(['error-message' => 'Authentication failed.']);
            }
            return redirect()->back()->withErrors(['error-message' => 'Username is case sensitive.']);
        }
        return redirect()->back()->withErrors(['error-message' => 'Username does not match any records.']);
    }
}
