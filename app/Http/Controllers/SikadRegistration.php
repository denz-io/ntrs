<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sikad;
use App\Helpers\PhotoConverter as Photo;

class SikadRegistration extends Controller
{
    public function index() 
    {
        return view('sikad-registration');
    }

    public function store(Request $request) 
    {
        $this->validateRequest($request);
        $photo =  new Photo;
        $request_array = $request->toArray();
        $request_array['profile'] = $photo->convert($request->profile); 
        Sikad::create($request_array);
        return redirect('/')->withErrors(['success','Account has been created.']);
    }

    public function validateRequest($request)
    {
        $request->validate([
            'association' => 'required|max:255',     
            'operator' => 'required|max:255',     
            'address' => 'required|max:255',     
            'body_number' => 'required|max:255',     
            'units' => 'required|integer|max:1000',     
            'or_number' => 'required|max:255',     
            'control_number' => 'required|max:255',     
            'amount_paid' => 'required|regex:/^\d*(\.\d{1,2})?$/',     
            'contact' => 'required|max:255',     
        ]);
    }
}
