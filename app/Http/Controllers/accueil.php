<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accueil extends Controller
{
    public function show(){
        return view('accueil');
    }
}
