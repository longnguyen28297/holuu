<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\link;

class adminLinkCtrl extends adminHomeCtrl
{
    //
    function __construct()
    {
    	parent::__construct();
    	$this->middleware('Admin');
    }
	function list(){
		$link=link::all();
		return view('admin.part.list_link',[
			'list_link'=>$link,
		]);
	}
	function new(){
		return view('admin.part.new_link');
	}
	function insert(Request $request){
		$validatedData = $this->validatedData($request);
		if ($validatedData->fails()) {
			return view('admin.part.new_link',
				[
					'name'=>$request->name,
					'link'=>$request->link,

				]
			)->withErrors($validatedData);
		}else {
			if (($request->status)=='') {
				$status=0;
			}
			else {
				$status=1;
			}
			$new_link = new link([
				'title'=>$request->name,
				'link'=>$request->link,
				'status'=>$status,
				'created_at'=>date("Y-m-d H:i:s"),
				'updated_at'=>date("Y-m-d H:i:s")
			]);
			$new_link->save();
			$new_link_new = $new_link->replicate();
			return redirect()->to('admin/link');
		}
	}
	function edit($slug){
		if ($slug=='') {
			return redirect()->to('admin');
		}elseif((link::where('slug',$slug))->count()<1){
			return redirect()->to('admin');
		}else {
			$link = link::where('slug',$slug)->first();
			return view('admin/part/edit_link',[
				'link_old'=>$link
			]);
		}
	}
	function update($slug,Request $request){
		if ($slug=='') {
			return redirect()->to('admin');
		}elseif((link::where('slug',$slug))->count()<1){
			return redirect()->to('admin');
		}else {
			$validatedData = $this->validatedData($request);
			if ($validatedData->fails()) {
				return view('admin.part.new_link',
					[
						'name'=>$request->name,
						'link'=>$request->link
					]
				)->withErrors($validatedData);
			}else {
				$link_update = link::where('slug',$slug);
				if (($request->status)=='') {
					$status=0;
				}
				else {
					$status=1;
				}
				$link_update->update([
					'title'=>$request->name,
					'link'=>$request->link,
					'status'=>$status,
					'updated_at'=>date("Y-m-d H:i:s")
				]);
				return redirect()->to('admin/link');
			}
		}
	}
	function delete($id){
		$link_deltete= link::where('id', $id)->delete();
		return redirect()->to('admin/link');
	}
}
