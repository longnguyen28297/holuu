<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\videos;
use App\indexing;

class adminVideosCtrl extends adminHomeCtrl
{
    //
    function __construct()
    {
    	parent::__construct();
    	$this->middleware('Admin');
    }
	function creat(){
		$indexing= indexing::all();
		return [
			'list_indexing'=>$indexing
		];
	}
	function list(){
		$videos=videos::all();
		return view('admin.part.list_videos',[
			'list_videos'=>$videos,
		]);
	}
	function new(){
		$data=$this->creat();
		return view('admin.part.new_videos',$data);
	}
	function insert(Request $request){
		$input = [
			'title'=>$request->title,
			'index'=>$request->index,
			'status'=>$request->status,
		];
		$validatedData = $this->validatedData($request);
		if ($validatedData->fails()) {
			return $this->new()->with($input)->withErrors($validatedData);
		}else {
			if ($request->hasFile('video')) {
				$getImg=$request->file('video');
				$videos=$getImg->getClientOriginalName();
				$destinationPath = public_path('/videos');
				$getImg->move($destinationPath, $videos);
				
				if (($request->status)=='') {
					$status=0;
				}
				else {
					$status=1;
				}
				$new_videos = new videos([
					'video'=>$videos,
					'name'=>$request->title,
					'id_index'=>$request->index,
					'status'=>$status,
					'created_at'=>date("Y-m-d H:i:s"),
					'updated_at'=>date("Y-m-d H:i:s")
				]);
				$new_videos->save();
				$new_videos_new = $new_videos->replicate();
				return redirect()->to('admin/videos');
			}
			else {
				return $this->new()->with($input)->withErrors(['video'=>'Bạn chưa tải lên video']);
			}
		}
	}
	function edit($slug){
		if ($slug=='') {
			return redirect()->to('admin');
		}elseif((videos::where('slug',$slug))->count()<1){
			return redirect()->to('admin');
		}else {
			$data = $this->creat();
			$videos = videos::where('slug',$slug)->first();
			return view('admin/part/edit_videos',[
				'videos_old'=>$videos
			])->with($data);
		}
	}
	function update($slug,Request $request){
		if ($slug=='') {
			return redirect()->to('admin');
		}elseif((videos::where('slug',$slug))->count()<1){
			return redirect()->to('admin');
		}else {
			$data= $this->creat();
			$validatedData = $this->validatedData($request);
			if ($validatedData->fails()) {
				return view('admin.part.new_videos',
					[
						'name'=>$request->name,
					]
				)->with($data)->withErrors($validatedData);
			}else {
				$videos_update = videos::where('slug',$slug);
				
				$videos_update->update([
					'name'=>$request->name,
					'id_indexing'=>$request->indexing,
					'updated_at'=>date("Y-m-d H:i:s")
				]);
				return redirect()->to('admin/videos');
			}
		}
	}
	function delete($id){
		$videos_deltete= videos::where('id', $id)->delete();
		return redirect()->to('admin/videos');
	}
}
