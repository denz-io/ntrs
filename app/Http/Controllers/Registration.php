<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operator;
use App\Helpers\PhotoConverter as Photo;
use RealRashid\SweetAlert\Facades\Alert;

class Registration extends Controller
{
    public function index() 
    {
        return view('registration');
    }

    public function store(Request $request) 
    {
        $request->type  === 'Sikad-sikad' ? $this->validateSikadRequest($request) : $this->validateTricycleRequest($request); 
        $photo =  new Photo;
        $request_array = $request->toArray();
        $request_array['profile'] = $photo->convert($request->profile); 
        Operator::create($request_array);
        Alert::success('Success!', 'Sikad operator has been registered');
        return redirect()->back();
    }

    private function validateSikadRequest($request)
    {
        $request->validate([
            'association'    => 'required|max:255',     
            'operator'       => 'required|max:255',     
            'address'        => 'required|max:255',     
            'body_number'    => 'required',     
            'units'          => 'required|integer|max:1000',     
            'or_number'      => 'required',     
            'control_number' => 'required',     
            'amount_paid'    => 'required|regex:/^\d*(\.\d{1,2})?$/',     
            'contact'        => 'required',     
        ]);
    }

    private function validateTricycleRequest($request)
    {
        $request->validate([
            'association'    => 'required|max:255',     
            'operator'       => 'required|max:255',     
            'address'        => 'required|max:255',     
            'body_number'    => 'required',     
            'or_number'      => 'required',     
            'control_number' => 'required',     
            'contact'        => 'required',     
        ]);
    }
}
