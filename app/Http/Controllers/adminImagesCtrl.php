<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\images;

class adminImagesCtrl extends adminHomeCtrl
{
    //
    function __construct()
    {
        parent::__construct();
        $this->middleware('Admin');
    }
    function list()
    {
    	$list_images= images::all();
    	return view('admin.part.list_images',[
    		'list_images'=>$list_images
    	]);
    }
    function edit($id){
    	$images = images::where('id',$id)->first();
    	if ($images->status==1) {
    		$status=0;
    	}else {
    		$status=1;
    	}
    	$images->update([
    		'status'=>$status,
    	]);
    	return redirect()->to('admin/list_images'); 
    }
}
