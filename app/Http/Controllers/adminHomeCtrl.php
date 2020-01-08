<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use adminTopic;
use App\topic;
use Auth;
use App\validate;
use Validator;

class adminHomeCtrl extends Controller
{
  public function __construct()
  {
    view()->share($this->web());
  }   
  public function web(){
    $topic_censor=topic::where('censor','0')->get();
    return [
      'topic_censor'=>$topic_censor,
    ];
  }
  function index(){
    $user = Auth::user();
    if ($user->can('viewAny')) {
      $topic = topic::orderBy('id','DESC')->get();

    }else {
      $topic = topic::where('creator',$user->id)->orderBy('id','ASC')->get();
    }
    return view('admin.part.list_topic',[
    	'topic'=>$topic
    ])->with($this->web());
  }
  function validatedData($request){
    $validatedData =  Validator::make(
      $request->all(),
      [ 
        'title' => 'bail|sometimes|required|max:255',
        'summary' => 'bail|sometimes|required|max:255',
        'city' => 'bail|sometimes|required',
        'index' => 'bail|sometimes|required',
        'creator' => 'bail|sometimes|required',
        'content' => 'bail|sometimes|required',
        'name' => 'bail|sometimes|required|max:255',
        'tags' => 'bail|sometimes|required',
        'images'=>'bail|image|max:20000',
        'address'=>'bail|sometimes|required|max:255',
        'phone'=>'bail|sometimes|required|numeric|max:999999999999',
        'fax'=>'bail|sometimes|required|numeric|max:999999999999',
        'email'=>'bail|sometimes|required|email|max:255',
        'video'  => 'bail|sometimes|mimes:mp4|max:20000',
        'keyword'=>'bail|sometimes|max:255'
        
      ],

      [
        'required' => ':attribute không được để trống',
        'min' => ':attribute không được nhỏ hơn :min',
        'max' => ':attribute không được lớn hơn :max',
        'image'=>':attribute chỉ được chọn các file ảnh',
        'numeric'=> ':attribute phải là số',
        'email'=> ':attribute phải đúng định dạng email vd: abc@xyz.vn',
        'video.mimes'=>'Chỉ được chọn video dạng mp4',
        'video.max'=>'Dung lượng video quá lớn',
        'images.max'=>'Dung lượng ảnh quá lớn'

      ],

      [
        'name' => 'Tên',
        'tags'=>'Thẻ',
        'images'=>'Ảnh',
        'phone'=>'Số điện thoại',
        'fax'=>'Số fax',
        'address'=>'Địa chỉ',
        'email'=>'Địa chỉ email',
        'title' => 'Tiêu đề',
        'summary'=>'Tóm tắt',
        'city'=>'Thành phố',
        'index'=>'Đầu mục',
        'creator'=>'Người tạo',
        'content'=>'Nội dung',
        'images'=>'Ảnh đại diện',
        'keyword'=>'Từ khóa',
      ]);

    return $validatedData;
    
  }

}
