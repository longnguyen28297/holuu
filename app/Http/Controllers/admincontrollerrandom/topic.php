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
use App\creator;
use Auth;

class adminTopicCtrl extends Controller
{
    //
    function creat(){
    	$city= city::all();
    	$indexing=indexing::all();
        $creator=creator::all();
    	return [
    		'list_city'=>$city,
    		'list_indexing'=>$indexing,
            'list_creator'=>$creator
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
            'topic_old'=>$topic
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
            ];
    $controller = new Controller();
    $validatedData = $controller->validatedData($request);
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
        $str='Do you like Cheese Whiz Spray tan Fake eyelashes Thats what is Lorem Ipsum to many it rubs them the wrong way all the way Its unreal uncanny makes you wonder if something is wrong it seems to seek your attention for all the wrong reasons Usually we prefer the real thing wine without sulfur based preservatives real butter not margarine and so wed like our layouts and designs to be filled with real words with thoughts that count information that has value The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods the paint you may slap on your face to impress the new boss is your business But what about your daily bread Design comps layouts wireframes will your clients accept that you go about things the facile way Authorities in our business will tell in no uncertain terms that Lorem Ipsum is that huge huge no no to forswear forever Not so fast It say there are some redeeming factors in favor of greeking text as its use is merely the symptom of a worse problem to take into consideration';
        $string = explode(' ', $str);
        for ($i = 0; $i < 20; $i++) {
        $randomTitle = ''; 
        $randomSummary='';
        $randomCont='';
        for ($j = 0; $j < 10; $j++) { 
        $index = rand(0, count($string) - 1); 
        $randomTitle .= $string[$index].' '; 
        }
        for ($k = 0; $k < 10; $k++) { 
        $index = rand(0, count($string) - 1); 
        $randomSummary .= $string[$index].' '; 
        }
        for ($l = 0; $l < 500; $l++) { 
        $index = rand(0, count($string) - 1); 
        $randomCont .= $string[$index].' '; 
        }
        
        $new_images_new = $images_new->replicate();
        $topic_new = new topic([
            'id_index'=>rand(1,7),
            'id_city'=>rand(1,13),
            'creator'=>$creator,
            'title'=>$randomTitle,
            'summary'=>$randomSummary,
            'images'=>'anh'.rand(1,8).'.jpg',
            'content'=> $randomCont,
            'views'=>'0',
            'status'=>$status,
            'censor'=>'0',
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);
        
        $topic_new->save();
        $new_topic_new = $topic_new->replicate();
        $city = city::where('id',$topic_new->id_city);
        $count_topic=($city->first()->count_topic)+1;
        $city->update([
            'count_topic'=>$count_topic,
        ]);
    }
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
       $controller = new Controller();
       $validatedData = $controller->validatedData($request);
       if ($validatedData->fails()) {
        return $this->editTopic($slug)->withErrors($validatedData)->with(
            [
                'title'=>$request->title,
                'index'=>$request->index,
                'city'=>$request->city,
                'creator'=>$request->creator,
                'content'=>$request->content,
                'summary'=>$request->summary,
                'status'=>$request->status
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
            if($topic_edit->images != '' &&file_exists(public_path('images/'.$topic_edit->images)))
        {
            unlink(public_path('images/'.$topic_edit->images));
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

        }
        
        if (($request->status)=='') {
            $status=0;
        }
        else {
            $status=1;
        }
        $topic_update->update([
            'id_index'=>$request->index,
            'id_city'=>$request->city,
            'creator'=>$request->creator,
            'title'=>$request->title,
            'summary'=>$request->summary,
            'images'=>$images,
            'content'=>$request->content,
            'status'=>$status,
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
    if($topic_deltete->images != '' &&file_exists(public_path('images/'.$topic_deltete->images)))
        {
            unlink(public_path('images/'.$topic_deltete->images));
        }
    $topic_deltete->delete();
    return redirect()->to('admin');
}else {return redirect()->to('admin')->withErrors('Bạn không có quyền xóa bài viết');}
}
}
