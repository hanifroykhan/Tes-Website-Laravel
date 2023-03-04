<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwapController extends Controller
{
    public function index()
    {
        $a = 5;
        $b = 3;
        
        $a = $a ^ $b;
        $b = $a ^ $b;
        $a = $a ^ $b;
        
        return view('functions.swap', ['a' => $a, 'b' => $b]);
    }
}
