<?php

namespace App\Http\Controllers;
use Socialite;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
class HomeController extends Controller
{
    public function index()
    {
        return View('trang-chu');
    }

    public function login()
    {
        return View('dang-nhap');
    }

    public function register()
    {
        return View('dang-ky');
    }

    public function handle_login(LoginRequest $request)
    {
        $user = [
            'username'  => $request->username,
            'password'  => $request->password,
            
        ];

        $admin = [
            'username'  => $request->username,
            'password'  => $request->password,
            // 'loaitaikhoan_id' => 2,
        ];

        //remember_token dùng để ghi nhớ đăng nhập
        if(Auth::attempt($user, $request->has('remember_token')))
        {
            //return View('User.Menu',compact(['Post','New']));
            return 'hello';
        }
        else if(Auth::attempt($admin, $request->has('remember_token')))
        {
            //return view('Admin.Menu');
        }
        else
        {
            return redirect()->back()->with("Error","Đăng nhập không thành công!");
        }

    }

    public function handle_register(RegisterRequest $request)
    {
        $emailExists = User::where('email',$request->email)->count();
        if ($emailExists > 0) {
            return redirect()->back()->with("Error","Tài khoản Gmail đã tồn tại!");
        }

        $userExists = User::where('username',$request->username)->count();
        if ($userExists >0) {
            return redirect()->back()->with("Error","Tài khoản người dùng đã tồn tại!");
        }

        $Users = User::create([
            'username'   =>  $request->username,
            'name'       =>  $request->name,
            'email'      =>  $request->email,
            'phone'      =>  $request->phone,
            'password'   =>  Hash::make($request->password),
            'type'       =>  $request->type,
            'img_avatar' =>  'Avatar.jpg',
            'status'     =>  1,
        ]);

        if(!empty($Users))
        {
            //Auth::Login($Users);
            return 'hello';
        }
        else
        {
            return 'loi';
        }
    }

    public function redirect_Google($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function redirect_Facebook($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    //Gọi hàm để tạo user
    public function callback_Google($provider)
    {
        $getInfo = Socialite::driver($provider)->user();
        //dd($getInfo->email);
        $isExist = User::where('email','=',$getInfo->email)->count();
        if($isExist > 0)
            return 'hi';
        else
        {
            //Tạo người dùng qua Google
            $user = $this->createUser($getInfo,$provider);
            $name=$getInfo->name;    
            return 'hello';
        }
    }

    public function callback_Facebook($provider)
    {
        $getInfo = Socialite::driver($provider)->user();
       //dd($getInfo->email);
        $isExist = User::where('email','=',$getInfo->email)->count();
        if($isExist > 0)
            return 'hi';
        else
        {
            //Tạo người dùng qua Google
            $user = $this->createUser($getInfo,$provider);
            $name=$getInfo->name;        
            return 'hello';
        }
    }    
    
    //Tạo người dùng
    function createUser($getInfo,$provider)
    {
        $user = User::where('email', $getInfo->email)->first();
        if (!$user) {
            $user = User::create([
               'Username'     => $getInfo->name,
               'email'    => $getInfo->email,
               'provider' => $provider,
               'provider_id' => $getInfo->id
           ]);
         }
    }
}