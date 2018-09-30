<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use App\Models\Operator;
use RealRashid\SweetAlert\Facades\Alert;

class SMS extends Controller
{
    public function index()
    {
        return view('sms');
    }

    public function store(Request $request)
    {
        if ($request->number) {
            $this->sendMessage($request->number, $request->message);
            Alert::success('Success','Message has been sent to the number '. $request->number . '.');
        } else {
            //$this->sendToAllOperators($request);
            Alert::info('This feature is not available yet.','You must actiavate your Nexmo account.');
        }
	return back();
    }

    private function sendToAllOperators($request)
    {
        foreach (Operator::all() as $data) {
            $this->sendMessage($data->contact, $request->message);
        }
    }

    private function sendMessage($number, $message)
    {
        $with_country_code = '+63' . ltrim($number, '0');
	Nexmo::message()->send([
            'to' => $with_country_code,
            'from' => 'NTRS System',
	    'text' => '[NTRS System] ' . $message . ' '
	]);
    }
		
}
