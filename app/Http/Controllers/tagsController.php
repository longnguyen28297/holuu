<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tags;
use App\indexing;
use App\topic;
class tagsController extends HomeController
{
    //
	public function listTopicFlTags($slug)
	{
		$id_tags=tags::where('slug',$slug)->first();
		$id_index='';
		$indexing = indexing::select('id')->where('id_tags',$id_tags->id)->get();
		foreach ($indexing as $index) {
			$id_index.=$index->id.',';
		}
		$listTopicFlTags= topic::where('id_index',trim($id_index,','))->where('censor','1')->paginate(10);
		$listTopicFlTags_first=$listTopicFlTags->first();
		return view('layouts.tags',[
		'listTopicFlTags_first'=>$listTopicFlTags_first,
		'listTopicFlTags'=>$listTopicFlTags,
		'tags_topic'=>$id_tags,
	])->with($this->web());
	}
	
}
