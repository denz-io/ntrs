<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class Login extends Controller
{
    public function index() 
    {
       return view('login'); 
    }

    public function store(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/home');
        }
        return redirect()->back()->withErrors(['error-message' => 'Authentication failed.']);
    }
}
