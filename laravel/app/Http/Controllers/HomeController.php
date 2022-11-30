<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wisata;

class HomeController extends Controller
{
    function index(){
        //memanggil view landing page pada folder frontpage
        //disertai dengan variable title yang dapat ditampilkan pada layout
        return view('frontpage.landingpage', ['title' => "Landing Page"]);
    }

    function first(){
        return view('frontpage.firstpage', ['title' => "first page"]);
    }

    function about(){
        return view('frontpage.about', ['title' => "About page"]);
    }

    function contact(){
        return view('frontpage.contact', ['title' => "Contact page"]);
    }

    public function tbwisata(){
        $wisata= Wisata::all();
        return view('elo.wisata', compact('wisata'));
    }
}
