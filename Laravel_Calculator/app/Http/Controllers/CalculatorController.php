<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function operations(Request $request){
        $firstnumber = $request->input('firstnumber');
        $secondnumber = $request->input('secondnumber');
        $thirdnumber = $request->input('thirdnumber');
        $formula = $request->input('formula');
        $result = 0;

        if($formula == 'perimeter'){
            $result = 2 * ($firstnumber + $secondnumber);
        } else if ($formula == 'volume'){
            $result = ($firstnumber * $secondnumber * $thirdnumber);
        } else if ($formula == 'area'){
            $result = ($firstnumber * $firstnumber);
        } else {
            $result = 0;
        }
        
        return redirect ('/')->with('message', 'RESULT:'.$result);
}
}
