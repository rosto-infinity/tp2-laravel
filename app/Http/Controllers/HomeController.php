<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function accueil(){
        return view('accueil');
    }
    function prestations(){
        return view('prestations');
    }
    function contact(){
        return view('contact');
    }
}
