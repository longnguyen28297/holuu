<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\banner;
use App\banner_slider;

class adminBannerCtrl extends adminHomeCtrl
{
    //
    function __construct()
    {
    	parent::__construct();
    	$this->middleware('Admin');
    }
	function banner()
	{
		$title = 'Ảnh bìa trang web';
		$list_banner = banner::all();
		if ($list_banner->count()>0) {
			$banner_edit = banner::first();
			return view('admin.part.new_banner',[
				'banner_edit'=>$banner_edit,
				'title'=>$title,
			]);
		}else {
			return view('admin.part.new_banner',['title'=>$title]);
		}
	}
	function bannerS()
	{
		$title='Ảnh bìa trang chủ';
		$list_banner = banner_slider::all();
		if ($list_banner->count()>0) {
			$banner_edit = banner_slider::first();
			return view('admin.part.new_banner',[
				'banner_edit'=>$banner_edit,
				'title'=>$title,
			]);
		}else {
			return view('admin.part.new_banner',['title'=>$title]);
		}
	}
	function insert(Request $request){
		if ($request->hasFile('images')) {
			$validatedData = $this->validatedData($request);
			if ($validatedData->fails()) {
				return $this->banner()->withErrors($validatedData);
			}else {
				$getImg=$request->file('images');
				$images=$getImg->getClientOriginalName();
				$destinationPath = public_path('/images/banner/');
				$getImg->move($destinationPath, $images);
				$data = ['images'=>$images,
				'created_at'=>date("Y-m-d H:i:s"),
				'updated_at'=>date("Y-m-d H:i:s")];
				$list_banner = banner::all();
				if ($list_banner->count()>0) {
					$banner_edit = banner::first();
					$banner_edit->update($data);
					
				}else {
					$new_banner = new banner($data);
					$new_banner->save();
				}
				return redirect()->to('admin/banner');
			}
		}else {
			return $this->banner()->withErrors([
				'images'=>'Bạn chưa chọn ảnh'
			]);
		}
	}
	function insertS(Request $request){
		if ($request->hasFile('images')) {
			$validatedData = $this->validatedData($request);
			if ($validatedData->fails()) {
				return $this->bannerS()->withErrors($validatedData);
			}else {
				$getImg=$request->file('images');
				$images=$getImg->getClientOriginalName();
				$destinationPath = public_path('/images/banner/');
				$getImg->move($destinationPath, $images);
				$data = ['images'=>$images,
				'created_at'=>date("Y-m-d H:i:s"),
				'updated_at'=>date("Y-m-d H:i:s")];
				$list_banner = banner_slider::all();
				if ($list_banner->count()>0) {
					$banner_edit = banner_slider::first();
					$banner_edit->update($data);
				}else {
					$new_banner = new banner_slider($data);
					$new_banner->save();
				}
				return redirect()->to('admin/banner_slider');
			}
		}else {
			return $this->bannerS()->withErrors([
				'images'=>'Bạn chưa chọn ảnh'
			]);
		}
	}
}
