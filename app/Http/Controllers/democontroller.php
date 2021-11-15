<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class democontroller extends Controller
{
    function myname($namevalue){
        return $namevalue;
    }
}
