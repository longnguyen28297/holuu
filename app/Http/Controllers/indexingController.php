<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tags;
use App\indexing;
use App\topic;
class indexingController extends HomeController
{
    //
	public function listTopicFlindexing($slug)
	{
		$indexing = indexing::where('slug',$slug)->first();
		$tags_topic=tags::where('id',$indexing->id_tags)->first();
		$listTopicFlIndexing=topic::where('status','1')->where('censor','1')->paginate(10);
		return view('layouts.indexing',[
		'listTopicFlIndexing'=>$listTopicFlIndexing,
		'listTopicFlIndexing_first'=>$listTopicFlIndexing->first(),
		'indexing_topic'=>$indexing,
		'tags_topic'=>$tags_topic
	])->with($this->web());
	}
	
}
