<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tags;
use App\indexing;

class adminIndexingCtrl extends adminHomeCtrl
{
    //
    function __construct()
    {
    	parent::__construct();
    	$this->middleware('Admin');
    }
	function creat(){
		$tags= tags::all();
		return [
			'list_tags'=>$tags
		];

	}
	function list(){
		$indexing=indexing::all();
		return view('admin.part.list_indexing',[
			'list_indexing'=>$indexing,
		]);
	}
	function new(){
		$data=$this->creat();
		return view('admin.part.new_indexing',$data);
	}
	function insert(Request $request){
		$data= $this->creat();
		$validatedData = $this->validatedData($request);
		if ($validatedData->fails()) {
			return view('admin.part.new_indexing',
				[
					'name'=>$request->name,
				]
			)->with($data)->withErrors($validatedData);
		}else {
			$new_indexing = new indexing([
				'name'=>$request->name,
				'id_tags'=>$request->tags,
				'created_at'=>date("Y-m-d H:i:s"),
				'updated_at'=>date("Y-m-d H:i:s")
			]);
			$new_indexing->save();
			$new_indexing_new = $new_indexing->replicate();
			return redirect()->to('admin/indexing');
		}
	}
	function edit($slug){
		if ($slug=='') {
			return redirect()->to('admin');
		}elseif((indexing::where('slug',$slug))->count()<1){
			return redirect()->to('admin');
		}else {
			$data = $this->creat();
			$indexing = indexing::where('slug',$slug)->first();
			return view('admin/part/edit_indexing',[
				'indexing_old'=>$indexing
			])->with($data);
		}
	}
	function update($slug,Request $request){
		if ($slug=='') {
			return redirect()->to('admin');
		}elseif((indexing::where('slug',$slug))->count()<1){
			return redirect()->to('admin');
		}else {
			$data= $this->creat();
			$validatedData = $this->validatedData($request);
			if ($validatedData->fails()) {
				return view('admin.part.new_indexing',
					[
						'name'=>$request->name,
					]
				)->with($data)->withErrors($validatedData);
			}else {
				$indexing_update = indexing::where('slug',$slug);
				
				$indexing_update->update([
					'name'=>$request->name,
					'id_tags'=>$request->tags,
					'updated_at'=>date("Y-m-d H:i:s")
				]);
				return redirect()->to('admin/indexing');
			}
		}
	}
	function delete($id){
		$indexing_deltete= indexing::where('id', $id)->delete();
		return redirect()->to('admin/indexing');
	}
}
