<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\topic;

class searchController extends HomeController
{
    //
    public function searchFullText(Request $request)
  {
      if ($request->key !='') {
        $key = str_replace(' ','%',$request->key);
          $topic_search = topic::where('status','1')->where('censor','1')->where(function ($query) use ($key) {
    $query->where('title','like','%'.$key.'%')
          ->orWhere('content','like','%'.$key.'%')
          ->orWhere('keyword','like','%'.$key.'%')
          ;
})->paginate(20);
          return view('layouts.search',['topic_search'=>$topic_search])->with($this->web());
      }else {
      	return redirect()->to('home');
      }
  }
}
