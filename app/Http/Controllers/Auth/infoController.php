<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\adminHomeCtrl;
use App\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;
use Illuminate\Http\Request;
use Rule;

class infoController extends Controller
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
    function infoUserGet()
    {   $web = new adminHomeCtrl();
        $user=User::find(Auth::user()->id);
        return view('auth.info_user',['info_user'=>$user])->with($web->web());
    }
    function infoUserUpdateGet()
    {   $web = new adminHomeCtrl();
        $user=User::find(Auth::user()->id);
        return view('auth.info_user_update',['info_user'=>$user])->with($web->web());
    }
    function infoUserUpdatePost(Request $request)
    {   $web = new adminHomeCtrl();
        $user=User::find(Auth::user()->id);

        $validated= Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255','unique:users,email,'.$user->id]
        ],
        [
            
            'required'=>':attribute không được để trống',
            'min' => ':attribute không được nhỏ hơn :min kí tự',
            'max'=>':attribute không được lớn hơn :max kí tự',
            'email'=> ':attribute phải đúng định dạng email vd: abc@xyz.vn',
            'unique'=>':attribute đã tồn tại',

        ],
        [
            'name'=>'Tên',
            'email'=>'Email'
        ]
    );
        if ($validated->fails()) {
            return $this->infoUserUpdateGet()->withErrors($validated);
        }else {
            $user->update([
                'name' => $request->name,
            'email' => $request->email,
            ]);
            return redirect()->to('admin');
        }
    }
    protected function validator(array $data)
    {
        $validated= Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($this->user->id, 'id')]
        ],
        [
            
            'required'=>':attribute không được để trống',
            'min' => ':attribute không được nhỏ hơn :min kí tự',
            'max'=>':attribute không được lớn hơn :max kí tự',
            'email'=> ':attribute phải đúng định dạng email vd: abc@xyz.vn',
            'unique'=>':attribute đã tồn tại',

        ],
        [
            'name'=>'Tên',
            'email'=>'Email'
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
}
