<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $users = User::select('*')->orderBy('id', 'desc')->paginate(5);
        $params = [
            'users' => $users,
        ];
        return view('users',$params);
    }

    public function home()
    {
        $users = User::count();
        $params = [
            'users' => $users,
        ];
        return view('home',$params);

    }

    public function register()
    {
        return view('register');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {
        // login_id, password, email, full_name, phone,status
        $user = new User();
        $user->login_id     = $request->login_id;
        $user->password     = Hash::make($request->password);
        $user->email        = $request->email;
        $user->full_name    = $request->full_name;
        $user->phone        = $request->phone;
        $user->status       = $request->status;
        try {
            $user->save();
            return redirect()->route('register')->with('success', 'Đăng ký thành công');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('register')->with('error', 'Đăng Ký không thành công');
        }
    }

    public function login() 
    {
        return view('login');
    }

    public function postLogin(LoginRequest $request)
    {
        $login_id = $request->login_id;
        $password = $request->password;
        $checkUserByLogin_id = User::where('login_id',$login_id)->take(1)->first();
        if ($checkUserByLogin_id && Hash::check($request->password,$checkUserByLogin_id->password)) {
            Auth::login($checkUserByLogin_id);
            return redirect()->route('users.home');
        } else {
            Session::flash('error_login_id','Thông tin tài khoản hoặc mật khẩu không chính xác');
            return redirect()->back();
        }

    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
   
}
