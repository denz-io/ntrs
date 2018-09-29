<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Operator as Oper, Association};
use App\Models\Driver;
use RealRashid\SweetAlert\Facades\Alert;

class Operator extends Controller
{
    public function show($id)
    {
        if ($operator = Oper::find($id)) {
            return view('view-operator', [
                'drivers' => Driver::where('operator_id', $id)->get(), 
                'operator' => $operator, 
                'assoc' => Association::all(),
                'body_numbers' => explode(",",$operator->body_number)
            ]);
        }
        Alert::warning('Error!','The operators data is no longer available.');
        return redirect()->back();
    }

    public function destroy($id)
    {
        Oper::find($id)->delete();
        return redirect('/')->withErrors(['success'=>'Record has been deleted.']);
    }

    public function store(Request $request)
    {
        $this->validateRequest($request); 
        Oper::find($request->id)->update($request->all());
        Alert::success('Success!','Record was updated.');
        return redirect()->back();
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
            'amount_paid'    => 'required|regex:/^\d*(\.\d{1,2})?$/',     
            'contact'        => 'required',     
        ]);
    }
}
