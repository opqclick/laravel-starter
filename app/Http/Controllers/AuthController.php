<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequests\PostLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function getLogin(){
        $commonData=[
            'title' => '',
            'page_title' => 'Login'
        ];

        return view('auth.login')->with('commonData', $commonData);
    }

    public function postLogin(PostLoginRequest $request){
        $loginCredentials = $request->only('email', 'password');

        if (Auth::attempt($loginCredentials)) {
            // Authentication passed...
            $user = Auth::user();
            //dd($user->user_type);
            if ($user->user_type === 'administrator') {
                return redirect()->route('administrator.dashboard');
            }elseif($user->user_type === 'user'){
                return redirect()->route('user.dashboard');
            }else{
                return view('404');
            }
        }

        return redirect()->route('login')->withInput(['email'=> $request->email])->with('msg', 'Incorrect password! Please check?');
    }

    public function postLogout(){
        Session::flush();
        Auth::logout();

        return redirect()->route('login')->with('msg', 'Successfully logged out!');
    }


}
