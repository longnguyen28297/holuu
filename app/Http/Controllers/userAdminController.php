<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class userAdminController extends adminHomeCtrl
{
    //
    function __construct()
    {
    	parent::__construct();
    	$this->middleware('Admin');
    }
	function list(){
		$list=	User::all();
		return view('admin.part.list_user',['list_admin'=>$list]);
	}
	function lock($id)
	{	
		if ((User::find($id)->id)==Auth::user()->id) {
			return redirect()->to('admin/listUser')->withErrors(['Bạn không thể khóa tài khoản hiện đang đăng nhập']);
		}else {
			if ((User::where('role','1')->count()>1)||(User::find($id)->role)==0) {
				User::find($id)->update(['status'=>'0']);
				return redirect()->to('admin/listUser')->withSuccess('Đã khóa');
			}else {
				return redirect()->to('admin/listUser')->withErrors(['Bạn không thể tài khóa khoản admin duy nhất']);
			}
		}
	}
	function unlock($id)
	{
		User::find($id)->update([
			'status' =>'1'
		]);
		return redirect()->to('admin/listUser')->withSuccess('Mở khóa thành công');
	}
	function delete($id)
	{
		if ((User::find($id)->id)==Auth::user()->id) {
			return redirect()->to('admin/listUser')->withErrors(['Bạn không thể xóa tài khoản hiện đang đăng nhập']);
		}else {
			if ((User::where('role','1')->count()>1)||(User::find($id)->role)==0) {
				User::find($id)->delete();
				return redirect()->to('admin/listUser')->withSuccess('Đã xóa');
			}else {
				return redirect()->to('admin/listUser')->withErrors(['Bạn không thể xóa tài khoản admin duy nhất']);
			}
			
		}

	}
}
