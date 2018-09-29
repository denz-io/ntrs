<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Operator, Association };
use App\Helpers\PhotoConverter as Photo;
use RealRashid\SweetAlert\Facades\Alert;

class Registration extends Controller
{
    public function index() 
    {
	$brgy = json_decode(file_get_contents(public_path() . "/json/brgy.json"), true); 
        return view('registration', [ 'assoc' => Association::all(), 'brgy' => $brgy]);
    }

    public function store(Request $request) 
    {
        $this->validateRequest($request); 
        $photo =  new Photo;
        $request_array = $request->toArray();
        $request_array['profile'] = $photo->convert($request->profile); 
        $operator = Operator::create($request_array);
        return redirect('/operator/' . $operator->id)->withErrors(['success'=>'Registration complete!']);
    }

    private function validateRequest($request)
    {
        $request->validate([
            'association'    => 'required|max:255',     
            'operator'       => 'required|max:255',     
            'address'        => 'required|max:255',     
            'body_number'    => 'required',     
            'units'          => 'required|integer|max:1000',     
            'or_number'      => 'required',     
            'sticker_number' => 'required',     
            'amount_paid'    => 'required|regex:/^\d*(\.\d{1,2})?$/',     
            'contact'        => 'required',     
        ]);
    }
}
