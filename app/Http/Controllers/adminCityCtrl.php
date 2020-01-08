<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\city;

class adminCityCtrl extends adminHomeCtrl
{
    //
    function __construct()
    {
    	parent::__construct();
    	$this->middleware('Admin');
    }
	function list()
	{
		$list_city = city::all();
		return view('admin.part.list_city',[
			'list_city'=>$list_city
		]);
	}
	function new(){
		return view('admin.part.new_city');
	}
	function insert(Request $request){
		$validatedData = $this->validatedData($request);
		if ($validatedData->fails()) {
			return view('admin.part.new_city',
				[
					'name'=>$request->name,
				]
			)->withErrors($validatedData);
		}else {
			$new_city= new city([
				'name'=>$request->name,
				'count_topic'=>'0',
				'created_at'=>date("Y-m-d H:i:s"),
				'updated_at'=>date("Y-m-d H:i:s")
			]);
			$new_city->save();
			$new_new_city= $new_city->replicate();
			return redirect()->to('admin/city');
		}
	}
	function edit($slug){
		if ($slug=='') {
			return redirect()->to('admin');
		}elseif((city::where('slug',$slug))->count()<1){
			return redirect()->to('admin');
		}else {
			$city = city::where('slug',$slug)->first();
			return view('admin/part/edit_city',[
				'city_old'=>$city
			]);
		}
	}
	function update($slug,Request $request){
		if ($slug=='') {
			return redirect()->to('admin');
		}elseif((city::where('slug',$slug))->count()<1){
			return redirect()->to('admin');
		}else {
			$validatedData = $this->validatedData($request);
			if ($validatedData->fails()) {
				return view('admin.part.new_city',
					[
						'name'=>$request->name,
					]
				)->withErrors($validatedData);
			}else {
				$city_update = city::where('slug',$slug);
				$city_update->update([
					'name'=>$request->name,
					'updated_at'=>date("Y-m-d H:i:s")
				]);
				return redirect()->to('admin/city');
			}
		}
	}
	function delete($id){
		$city_deltete= city::where('id', $id)->delete();
		return redirect()->to('admin/city');
	}
}
