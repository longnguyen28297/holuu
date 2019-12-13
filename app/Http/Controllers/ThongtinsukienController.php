<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThongtinsukienController extends Controller
{
    public function thongtinsukien()
    {
    	return view('layouts.thongtinsukien');
    }
}
