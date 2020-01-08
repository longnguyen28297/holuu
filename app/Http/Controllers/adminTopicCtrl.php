<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Sluggable;
use App\indexing;
use App\city;
use App\topic;
use File;
use View;
use App\images;
use Auth;
class adminTopicCtrl extends adminHomeCtrl
{
    //
    function view_censor()
    {
        $topic = topic::where('censor','0')->get();
        return view('admin.part.list_topic',['topic'=>$topic]);
    }
    function creat(){
    	$city= city::all();
    	$indexing=indexing::all();
    	return [
    		'list_city'=>$city,
    		'list_indexing'=>$indexing,
    	];

    }
    function editTopic($slug){
        if ($slug=='') {
            return redirect()->to('admin');
        }elseif((topic::where('slug',$slug))->count()<1){
            return redirect()->to('admin');
        }else {
            $data = $this->creat();
            $user = Auth::user();
            $topic = topic::where('slug',$slug)->first();
            if ($user->can('update', $topic)) {
             return view('admin/part/edit_topic',[
                'topic_old'=>$topic
            ])->with($data);
         } else {
          return redirect()->to('admin')->withErrors('Bạn không có quyền truy cập');
      }
      
  }
}
function detail($slug){
    if ($slug=='') {
     redirect()->to('admin');
 }elseif((topic::where('slug',$slug))->count()<1){
  return  redirect()->to('admin');
}else {
    $topic = topic::where('slug',$slug)->first();
    return view('admin/part/detail_content',[
        'topic_detail'=>$topic
    ]);
}
}
function new() {
 $data = $this->creat();
 return view('admin/part/new_topic',$data);
}
function newPost(Request $request){
    $input = [
        'title'=>$request->title,
        'index'=>$request->index,
        'city'=>$request->city,
        'creator'=>$request->creator,
        'content'=>$request->content,
        'summary'=>$request->summary,
        'status'=>$request->status,
        'keyword'=>$request->keyword
    ];
    $validatedData = $this->validatedData($request);
    if ($validatedData->fails()) {
        return $this->new()->withErrors($validatedData)->with($input);
    }else {
        $creator = Auth::id();
        if ($request->hasFile('images')) {
            $getImg=$request->file('images');
            $images=$getImg->getClientOriginalName();
            $destinationPath = public_path('/images');
            $getImg->move($destinationPath, $images);
            
            if (($request->status)=='') {
                $status=0;
            }
            else {
                $status=1;
            }

            $images_new = new images([
                'images'=>$images,
                'slug'=>$images,
                'status'=>'1',
                'title'=>$request->title,
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
            ]);
            $images_new->save();
            $new_images_new = $images_new->replicate();
            $city = city::where('id',$request->city);
            $count_topic=($city->first()->count_topic)+1;
            $city->update([
                'count_topic'=>$count_topic,
            ]);
            $topic_new = new topic([
                'id_index'=>$request->index,
                'id_city'=>$request->city,
                'creator'=>$creator,
                'title'=>$request->title,
                'summary'=>$request->summary,
                'images'=>$images,
                'content'=>$request->content,
                'views'=>'0',
                'status'=>$status,
                'keyword'=>$request->keyword,
                'censor'=>'0',
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
            ]);
            $topic_new->save();
            $new_topic_new = $topic_new->replicate();
            return redirect()->to('admin');
        }else {
           return $this->new()->withErrors(['images'=>'Bạn chưa chọn ảnh đại diện bài viết'])->with($input);
       }
       
   }

}
function update($slug, Request $request){
    if ($slug=='') {
        return redirect()->to('admin');
    }elseif((topic::where('slug',$slug))->count()<1){
        return redirect()->to('admin');
    }else {
        $user = Auth::user();
        $topic = topic::where('slug',$slug)->first();
        if ($user->can('update', $topic)) {
         $validatedData = $this->validatedData($request);
         if ($validatedData->fails()) {
            return $this->editTopic($slug)->withErrors($validatedData)->with(
                [
                    'title'=>$request->title,
                    'index'=>$request->index,
                    'city'=>$request->city,
                    'content'=>$request->content,
                    'summary'=>$request->summary,
                    'status'=>$request->status,
                    'keyword'=>$request->keyword
                ]);
        }else {
            $topic_edit = topic::where('slug',$slug)->first();
            $topic_update = topic::where('slug',$slug);
            if ($request->file('images')=='') {
                $images=$topic_edit->images;
            }else {
                $getImg=$request->file('images');
                $images=$getImg->getClientOriginalName();
                $destinationPath = public_path('/images');
                $getImg->move($destinationPath, $images);
                $images_exist = images::where('images',$topic_edit->images)->delete();
                
                $images_new = new images([
                    'images'=>$images,
                    'slug'=>$images,
                    'status'=>'1',
                    'title'=>$request->title,
                    'created_at'=>date("Y-m-d H:i:s"),
                    'updated_at'=>date("Y-m-d H:i:s")
                ]);
                $images_new->save();
                $new_images_new = $images_new->replicate();

            }
            
            if (($request->status)=='') {
                $status=0;
            }
            else {
                $status=1;
            }
            $city = city::where('id',$request->city);
            $count_topic=($city->first()->count_topic)+1;
            $city->update([
                'count_topic'=>$count_topic,
            ]);
            $city_old = city::where('id',$topic_edit->id_city);
            $count_topic_old=($city_old->first()->count_topic)-1;
            $city_old->update([
                'count_topic'=>$count_topic_old,
            ]);

            $topic_update->update([
                'id_index'=>$request->index,
                'id_city'=>$request->city,
                'creator'=>$user->id,
                'title'=>$request->title,
                'summary'=>$request->summary,
                'images'=>$images,
                'content'=>$request->content,
                'status'=>$status,
                'keyword'=>$request->keyword,
                'censor'=>'0',
                'updated_at'=>date("Y-m-d H:i:s")
            ]);
            return redirect()->to('admin')->withSuccess('Cập nhật thành công');
        }
    }else {return redirect()->to('admin')->withErrors('Bạn không có quyền truy cập');}
}
}
function censor($slug){
    $user = Auth::user();
    $topic_show= topic::where('slug', $slug)->first();
    if ($user->can('censor', $topic_show)) {
        $topic_show->update([
            'censor'=>'1',
            'updated_at'=>date("Y-m-d H:i:s")
        ]);
        return redirect()->to('admin')->withSuccess('Duyệt thành công');
    }else {return redirect()->to('admin')->withErrors('Bạn không có quyền duyệt bài');}
}

function delete($slug){
    $user = Auth::user();
    $topic_deltete= topic::where('slug', $slug)->first();
    if ($user->can('delete', $topic_deltete)) {
        $images_exist = images::where('images',$topic_deltete->images)->delete();
        $topic_deltete->delete();
        return redirect()->to('admin')->withSuccess('Xóa thành công');
    }else {return redirect()->to('admin')->withErrors('Bạn không có quyền xóa bài viết');}
}


}
