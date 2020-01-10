<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\topic;
use App\banner;
use App\videos;
use App\banner_slider;
use App\link;
use App\tags;
use App\info;
use App\images;
use App\city;
use App\User;





class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function web()
    {
        $banner_slider= banner_slider::first();
        $banner_header= banner::first();
        $tags_menu=tags::where('status_menu','1')->get();
        $all_topic=topic::where('status','1')->where('censor','1')->orderBy('id','DESC')->get();
        $topic_topview= topic::where('status','1')->where('censor','1')->orderBy('views','DESC')->paginate(10);
        $topic_new= topic::where('status','1')->where('censor','1')->orderBy('id','DESC')->paginate(10);
        $videos=videos::where('status','1')->paginate(10);
        $link=link::where('status','1')->paginate(10);
        $info=info::first();
        $images8=images::where('status','1')->paginate(8);
        $topic_first=$all_topic->first();
        $tags_home=tags::where('status_home','1')->where('type','0')->paginate(8);
        $tags_library=tags::where('status_home','1')->where('type','1')->paginate(8);
        $city = city::orderBy('count_topic','DESC')->take(5)->get();
        $count_topic_other_city=(city::sum('count_topic'))-($city->sum('count_topic'));
        $user=User::all();
        return [
            'banner_header'=>$banner_header,
            'tags_menu'=>$tags_menu,
            'all_topic'=>$all_topic,
            'topic_topview'=>$topic_topview,
            'topic_new'=>$topic_new,
            'videos'=>$videos,
            'link'=>$link,
            'info'=>$info,
            'images8'=>$images8,
            'topic_first'=>$topic_first,
            'tags_home'=>$tags_home,
            'tags_library'=>$tags_library,
            'citys'=>$city,
            'count_topic_other_city'=>$count_topic_other_city,
            'banner_slider'=>$banner_slider,
            'creators'=>$user,
        ];
    }
    public function home()
    {
        return view('layouts.home')->with($this->web());
    }
}
