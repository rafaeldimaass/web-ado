<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function press(){
        return view('press');
    }
    public function affiliates(){
        return view('affiliates');
    }
}
