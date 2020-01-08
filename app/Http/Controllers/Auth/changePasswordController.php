<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\adminHomeCtrl;
use App\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;
use Illuminate\Http\Request;


class changePasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('Admin');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    function changeGet()
    {
        $web = new adminHomeCtrl();
        return view('auth.passwords.change_password')->with($web->web());
    }
    function change(Request $request)
    {
        $user=Auth::user();
        $validated= Validator::make($request->all(), [
            'password' => ['required', 'string', 'min:6', 'confirmed']
        ],
        [
            'required'=>':attribute không được để trống',
            'min' => ':attribute không được nhỏ hơn :min kí tự',
            'max'=>':attribute không được lớn hơn :max kí tự',
            'password.confirmed'=>'Nhập lại mật khẩu không đúng'

        ],
        [
            'password'=>'Mật khẩu'
        ]
    );
        if ($request->password_old) {
            if (Hash::check($request->password_old, $user->password)) {
               if ($validated->fails()) {
                return $this->changeGet()->withErrors($validated)->with(['password_old'=>$request->password_old,'password'=>$request->password,'password_confirmation'=>$request->password_confirmation]);
        }else {
            User::find($user->id)->update(['password' => Hash::make($request->password)]);
            
            return redirect()->to('admin');
        }
            }else{
                 return $this->changeGet()->withErrors(['password_old'=>'Mật khẩu không đúng'])->with(['password_old'=>$request->password_old,'password'=>$request->password,'password_confirmation'=>$request->password_confirmation]);
            }
        }else {
            return $this->changeGet()->withErrors(['password_old'=>'Chưa nhập mật khẩu'])->with(['password_old'=>$request->password_old,'password'=>$request->password,'password_confirmation'=>$request->password_confirmation]);
        }
        
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
}
