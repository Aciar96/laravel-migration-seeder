<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use app\Train;

class homecontroller extends Controller
{
   
    
    public function index(){
       $trains = Train::all();
       
        return view('home');

    }
}

