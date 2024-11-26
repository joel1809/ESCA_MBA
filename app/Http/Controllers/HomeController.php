<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        return view('pages.home');
    }

    public function presentation (){
        return view('pages.presentation');
    }

    public function programme (){
        return view('pages.programme');
    }

    public function evenement (){
        return view('pages.evenement');
    }

    public function promoteur (){
        return view('pages.promoteur');
    }

    public function temoignage (){
        return view('pages.temoignage');
    }

    public function admission (){
        return view('pages.admission');
    }

    public function contact (){
        return view('pages.contact');
    }


}
