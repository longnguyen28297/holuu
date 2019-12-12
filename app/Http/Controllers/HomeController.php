<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //view
    public function Home()
    {
    	return view('layouts.home');
    }
}
