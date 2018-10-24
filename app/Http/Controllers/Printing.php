<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Operator, Association, Driver, Route};

class Printing extends Controller
{
    public function show($type)
    {
        return view('print-'.$type);
    }

    public function store(Request $request)
    {
        return $this->getData($request);
    }

    public function printSingle(Request $request)
    {
        switch($request->type) {
            case 'operator':    
                return Operator::whereId($request->id)->with('getAssociation.getRoutes')->first();
                break;
            case 'association':     
                return Association::find($request->id);
                break;
            case 'driver':     
                return Driver::find($request->id);
                break;
            case 'route':     
                return Route::find($request->id);
                break;
        }
    }

    public function printAll(Request $request)
    {
        switch($request->type) {
            case 'operator':    
                return Operator::with('getAssociation.getRoutes')->get();
                break;
            case 'association':     
                return Association::all();
                break;
            case 'driver':     
                return Driver::all();
                break;
            case 'route':     
                return Route::all();
                break;
        }
    }

    public function printQuery(Request $request)
    {
        $data = [];
        switch($request['type']) {
            case 'operator':    
                if (count($found = Operator::where('operator', $request['query'])->get())) {
                    $data = $found;
                }
                if (count($found = Operator::where('association', $request['query'])->get())) {
                    $data = $found;
                }
                if (count($found = Operator::where('type', $request['query'])->get())) {
                    $data = $found;
                }
                if (strtolower($request['query']) == 'active' || strtolower($request['query']) == 'inactive') {
                    if ($found = Operator::where('is_active', strtolower($request['query']) == 'active' ? 1 : 0)->get()) {
                        $data = $found;
                    }
                }
                break;
            case 'association':     
                if (count($found = Association::where('type', $request['query'])->get())) {
                    $data = $found;
                }
                if (count($found = Association::where('name_short', $request['query'])->get())) {
                    $data = $found;
                }
                if (count($found = Association::where('association_head', $request['query'])->get())) {
                    $data = $found;
                }
                if (count($found = Association::where('contact', $request['query'])->get())) {
                    $data = $found;
                }
                break;
            case 'driver':     
                if (count($found = Driver::where('name', $request['query'])->get())) {
                    $data = $found;
                }
                if (count($found = Driver::where('type', $request['query'])->get())) {
                    $data = $found;
                }
                if (count($found = Driver::where('address', $request['query'])->get())) {
                    $data = $found;
                }
                if (count($found = Driver::where('contact', $request['query'])->get())) {
                    $data = $found;
                }
                if (count($found = Driver::where('sticker_number', $request['query'])->get())) {
                    $data = $found;
                }
                if (count($found = Driver::where('body_number', $request['query'])->get())) {
                    $data = $found;
                }
                break;
            case 'route':     
                if (count($found = Route::where('route_start', $request['query'])->get())) {
                    $data = $found;
                }
                if (count($found = Route::where('route_end', $request['query'])->get())) {
                    $data = $found;
                }
                if (count($found = Route::where('rate', $request['query'])->get())) {
                    $data = $found;
                }
                if (count($found = Route::where('rate_discounted', $request['query'])->get())) {
                    $data = $found;
                }
                break;
        }
        return count($data) ? $data->toArray() : [];
    }

    private function getData($request)
    {
        $data = [];
        foreach ($request->toprint as $id) {
            array_push($data, $this->checkType($request->type, $id));
        }
        return $data;
    }

    private function checkType($type, $id)
    {
        switch($type) {
            case 'operator':    
                return Operator::whereId($id)->with('getAssociation.getRoutes')->first();
                break;
            case 'association':     
                return Association::find($id);
                break;
            case 'driver':     
                return Driver::find($id);
                break;
            case 'route':     
                return Route::find($id);
                break;
        }
    }
}
