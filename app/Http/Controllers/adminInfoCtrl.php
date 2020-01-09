<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\info;

class adminInfoCtrl extends adminHomeCtrl
{
    //
    function __construct()
    {
    	parent::__construct();
    	$this->middleware('Admin');
    }
    function list()
	{
		$list_info = info::all();
		if ($list_info->count()>0) {
		$info_edit = info::first();
		return redirect()->to('admin/edit_info/'.$info_edit->slug);
		}else {
		return redirect()->to('admin/new_info');
		}
	}
	function new(){
		$list_info = info::all();
		if ($list_info->count()>0) {
		$info_edit = info::first();
		return redirect()->to('admin/edit_info/'.$info_edit->slug);
		}else {
		return view('admin.part.new_info');
		}
		
	}
	function insert(Request $request){
		$data_typed = [
					'name'=>$request->name,
					'name'=>$request->name,
				'address'=>$request->address,
				'phone'=>$request->phone,
				'email'=>$request->email,
				'fax'=>$request->fax,
				'content'=>$request->content,
				];
		$validatedData = $this->validatedData($request);
		if ($validatedData->fails()) {
			return $this->new()->with($data_typed)->withErrors($validatedData);
		}else {
				if ($request->hasFile('images')) {
            $getImg=$request->file('images');
        $images=$getImg->getClientOriginalName();
        $destinationPath = public_path('/images/logo');
        $getImg->move($destinationPath, $images);
    
			$new_info=new info([
				'name'=>$request->name,
				'address'=>$request->address,
				'phone'=>$request->phone,
				'email'=>$request->email,
				'fax'=>$request->fax,
				'content'=>$request->content,
				'logo'=>$images,
				'facebook'=>$request->facebook,
				'created_at'=>date("Y-m-d H:i:s"),
				'updated_at'=>date("Y-m-d H:i:s")
			]);
			$new_info->save();
			$new_info_new  = $new_info->replicate();
			return redirect()->to('admin');
		}else {
			return $this->new()->with($data_typed)->withErrors(['images'=>'Bạn chưa chọn logo']);
		}
		}
	}
	function edit($slug){
		if ($slug=='') {
			return redirect()->to('admin');
		}elseif((info::where('slug',$slug))->count()<1){
			return redirect()->to('admin');
		}else {
			$info = info::where('slug',$slug)->first();
			return view('admin/part/edit_info',[
				'info_old'=>$info
			]);
		}
	}
	function update($slug,Request $request){
		if ($slug=='') {
			return redirect()->to('admin');
		}elseif((info::where('slug',$slug))->count()<1){
			return redirect()->to('admin');
		}else {
    	$info_edit = info::where('slug',$slug)->first();
			$data_typed = [
					'name'=>$request->name,
					'name'=>$request->name,
				'address'=>$request->address,
				'phone'=>$request->phone,
				'email'=>$request->email,
				'fax'=>$request->fax,
				'content'=>$request->content,
				];
			$validatedData = $this->validatedData($request);
			if ($validatedData->fails()) {
				return $this->edit($info_edit->slug)->with($data_typed)->withErrors($validatedData);
			}else {
		if ($request->hasFile('images')) {
        $getImg=$request->file('images');
        $images=$getImg->getClientOriginalName();
        $destinationPath = public_path('/images/logo');
        $getImg->move($destinationPath, $images);
        if($info_edit->logo != '' &&file_exists(public_path('images/logo/'.$info_edit->logo)))
        {
            unlink(public_path('images/logo/'.$info_edit->logo));
        }
    }else {
    	$images=$info_edit->logo;
    }
				$info_update = info::where('slug',$slug);
				$info_update->update([
				'name'=>$request->name,
				'address'=>$request->address,
				'phone'=>$request->phone,
				'email'=>$request->email,
				'fax'=>$request->fax,
				'content'=>$request->content,
				'logo'=>$images,
				'facebook'=>$request->facebook,
				'created_at'=>date("Y-m-d H:i:s"),
				'updated_at'=>date("Y-m-d H:i:s")
			]);
				return redirect()->to('admin');
			}
		}
	}
}
