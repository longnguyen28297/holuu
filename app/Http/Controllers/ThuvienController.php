<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThuvienController extends Controller
{
    public function thuvien()
    {
    	return view('layouts.thuvien');
    }
}
