<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sitecontroller extends Controller
{
    function home (){
        return view('homepage');
    }
    function about(){
        return view('about');
    }
}
