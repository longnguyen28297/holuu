<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //view
    public function trangchu()
    {
    	return view('layouts.trangchu');
    }
    public function chitiet()
    {
    	return view('layouts.chitiet');
    }
    public function quyche()
    {
    	return view('layouts.quyche');
    }
    public function xaydungdongtoc()
    {
    	return view('layouts.xaydungdongtoc');
    }

}
