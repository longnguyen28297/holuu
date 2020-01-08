<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\topic;
use App\tags;
use App\indexing;


class detailController extends HomeController
{
    //
    public function detail($slug){
        $topic_first = topic::where('slug',$slug)->first();
        $topic_first->increment('views');
        $indexing = indexing::where('id',$topic_first->id_index)->first();
        $tags_topic=tags::where('id',$indexing->id_tags)->first();
        $same_topic = topic::where('id_index',$topic_first->id_index)->orderBy('id','DESC')->paginate(3);
    	return view('layouts.detail',[
            'topic_detail'=>$topic_first,
            'same_topic'=>$same_topic,
            'indexing_topic'=>$indexing,
            'tags_topic'=>$tags_topic
        ])->with($this->web());
    }
}
