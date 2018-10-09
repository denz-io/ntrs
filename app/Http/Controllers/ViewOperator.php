<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Operator as Oper, Association};
use App\Models\Driver;
use App\Helpers\Photo;
use RealRashid\SweetAlert\Facades\Alert;

class ViewOperator extends Controller
{
    public function show($id)
    {
	$brgy = json_decode(file_get_contents(public_path() . "/json/brgy.json"), true); 
        if ($operator = Oper::find($id)) {
            return view('view-operator', [
                'drivers'      => Driver::where('operator_id', $id)->get(), 
                'operator'     => $operator, 
                'assoc'        => Association::all(),
                'body_numbers' => explode(",",$operator->body_number),
                'sticker_numbers' => explode(",",$operator->sticker_number),
                'brgy'         => $brgy
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
        $request_array = $request->toArray();

        if ($request->file('profile')) {
            $photo =  new Photo;
            $request_array['profile'] = $photo->upload($request->file('profile')); 
        }

        Oper::find($request->id)->update($request_array);
        Alert::success('Success!','Record was updated.');

        return redirect()->back();
    }

    public function accountStatus($id)
    {
        $operator = Oper::find($id);
        $operator->update(['is_active' => !$operator->is_active ]);
        Alert::success('Success!','Status updated.');
        return redirect()->back();
    }

    private function validateRequest($request)
    {
        $request->validate([
            'association'    => 'required|max:255',     
            'operator'       => 'required|max:255',     
            'address'        => 'required|max:255',     
            'or_number'      => 'required',     
            'amount_paid'    => 'required|regex:/^\d*(\.\d{1,2})?$/',     
            'contact'        => 'required',     
            'profile'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }
}
