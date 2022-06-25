<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clienteControloller extends Controller
{
    public function registrar(Request $request){
        $data = [];
        return view('registrar', $data);
    }
}
