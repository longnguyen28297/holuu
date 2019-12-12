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
    public function congdongdonggop()
    {
    	return view('layouts.congdongdonggop');
    }
    public function gopy()
    {
    	return view('layouts.gopy');
    }
    public function khuyenhockhuyentai()
    {
    	return view('layouts.khuyenhockhuyentai');
    }
    public function lichsudongho()
    {
    	return view('layouts.lichsudongho');
    }
    public function nguoitotviectot()
    {
    	return view('layouts.nguoitotviectot');
    }
    public function quyche()
    {
    	return view('layouts.quyche');
    }
    public function thongtinsukien()
    {
    	return view('layouts.thongtinsukien');
    }
    public function thuvien()
    {
    	return view('layouts.thuvien');
    }

}
