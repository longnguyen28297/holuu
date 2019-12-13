<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GopyController extends Controller
{
    public function gopy()
    {
    	return view('layouts.gopy');
    }
}
