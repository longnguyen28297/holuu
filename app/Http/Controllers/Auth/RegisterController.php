<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\adminHomeCtrl;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends adminHomeCtrl
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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/listUser';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('Admin');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'role'=>['required','boolean','numeric'],
        ],
        [
            'boolean'=>'Bạn đang cố làm điều gì vậy?',
            'required'=>':attribute không được để trống',
            'min' => ':attribute không được nhỏ hơn :min kí tự',
            'max'=>':attribute không được lớn hơn :max kí tự',
            'email'=> ':attribute phải đúng định dạng email vd: abc@xyz.vn',
            'unique'=>':attribute đã tồn tại',
            'role.required'=>'Bạn đang cố làm điều gì vậy?',
            'role.numeric'=>'Bạn đang cố làm điều gì vậy?',
            'confirmed'=>'Nhập lại mật khẩu chưa đúng'

        ],
        [
            'name'=>'Tên',
            'email'=>'Email',
            'password'=>'Mật khẩu'
        ]
    );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);
    }
      public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));
        // ở đây đã xóa dòng $this->guard()->login($user)
        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }
}
