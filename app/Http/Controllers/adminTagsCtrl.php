<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tags;
use App\topic;


class adminTagsCtrl extends adminHomeCtrl
{
    //
    function __construct()
    {
    	parent::__construct();
    	$this->middleware('Admin');
    }
	function list()
	{
		$list_tags = tags::all();
		return view('admin.part.list_tags',[
			'list_tags'=>$list_tags
		]);
	}
	function new(){
		return view('admin.part.new_tags');
	}
	function insert(Request $request){
		$validatedData = $this->validatedData($request);
		if ($validatedData->fails()) {
			return view('admin.part.new_tags',
				[
					'name'=>$request->name,
					'status_home'=>$request->status_home,
					'status_menu'=>$request->status_menu,
					'type'=>$request->type,
				]
			)->withErrors($validatedData);
		}else {
			if ($request->status_home!='') {
				$status_home=1;
			}else {
				$status_home=0;
			}
			if ($request->status_menu!='') {
				$status_menu=1;
			}else {
				$status_menu=0;
			}
			if ($request->type!='') {
				$type=1;
			}else {
				$type=0;
			}
			$new_tags=new tags([
				'name'=>$request->name,
				'status_home'=>$status_home,
				'status_menu'=>$status_menu,
				'type'=>$type,
				'created_at'=>date("Y-m-d H:i:s"),
				'updated_at'=>date("Y-m-d H:i:s")
			]);
			$new_tags->save();
			$new_tags_new= $new_tags->replicate();
			return redirect()->to('admin/tags');
		}
	}
	function edit($slug){
		if ($slug=='') {
			return redirect()->to('admin');
		}elseif((tags::where('slug',$slug))->count()<1){
			return redirect()->to('admin');
		}else {
			$tags = tags::where('slug',$slug)->first();
			return view('admin/part/edit_tags',[
				'tags_old'=>$tags
			]);
		}
	}
	function update($slug,Request $request){
		if ($slug=='') {
			return redirect()->to('admin');
		}elseif((tags::where('slug',$slug))->count()<1){
			return redirect()->to('admin');
		}else {
			$validatedData = $this->validatedData($request);
			if ($validatedData->fails()) {
				return view('admin.part.new_tags',
					[
						'name'=>$request->name,
						'status_home'=>$request->status_home,
						'status_menu'=>$request->status_menu,
						'type'=>$request->type,
					]
				)->withErrors($validatedData);
			}else {
				if ($request->status_home!='') {
					$status_home=1;
				}else {
					$status_home=0;
				}
				if ($request->status_menu!='') {
					$status_menu=1;
				}else {
					$status_menu=0;
				}
				if ($request->type!='') {
					$type=1;
				}else {
					$type=0;
				}
				$tags_update = tags::where('slug',$slug);
				$tags_update->update([
					'name'=>$request->name,
					'status_home'=>$status_home,
					'status_menu'=>$status_menu,
					'type'=>$type,
					'updated_at'=>date("Y-m-d H:i:s")
				]);
				return redirect()->to('admin/tags');
			}
		}
	}
	function delete($id){
		$tags_deltete= tags::where('slug', $id)->delete();
		return redirect()->to('admin/tags')->withSuccess('Đã xóa');
	}
}
