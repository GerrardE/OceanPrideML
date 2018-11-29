<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function laolu(){
        return view('pages.laolu');
    }

    public function emmanuel(){
        return view('pages.emmanuel');
    }

    public function fikayo(){
        return view('pages.fikayo');
    }

    public function contact(){
        return view('pages.contact');
    }
}
