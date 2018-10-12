<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Operator as Oper, Association as Assoc};
use RealRashid\SweetAlert\Facades\Alert;

class Operator extends Controller
{
    public function index() 
    {
        return view('operator', ['operators' => Oper::all(), 'assoc' => Assoc::all()]);
    }

    public function activateAllAccounts()
    {
        Oper::where('is_active', 0)->update(['is_active' => '1']);
        Alert::success('Success!', 'All operators account are now active.');
        return redirect()->back();
    }
    
    public function deactivateAllAccounts()
    {
        Oper::where('is_active', 1)->update(['is_active' => '0']);
        Alert::success('Success!', 'All operators account are now deactivated.');
        return redirect()->back();
    }
}
