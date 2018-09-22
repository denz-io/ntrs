<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{Association as Assoc, Operator};

class AutoSuggestion extends Controller
{
    public function show($type)
    {
        
        $assoc = Assoc::where('type', $type)->get();
        return response($this->getSuggestion($assoc));
    }

    private function getSuggestion($associations)
    {
        $operators = [];
        foreach($associations as $association) {
            array_push($operators, [
                'assoc' => $association['name_short'],
                'count' => count(Operator::where('association', 
                           $association['name_short'])->get() ?? [])
            ]);
        }
        return $this->getMin($operators);
    }

    private function getMin($operators)
    {
        $min = $operators[0];
        foreach($operators as $operator){
            if ($operator['count'] < $min['count']) {
                $min = $operator;
            }
        }
        return $min;
    }
}
