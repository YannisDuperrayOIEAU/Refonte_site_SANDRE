<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accueil extends Controller
{
    public function show(){
        $rubriques_menu = config('config_menu.rubriques');
        return view('accueil', compact('rubriques_menu'));
    }
}
