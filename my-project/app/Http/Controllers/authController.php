<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class authController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }


    public function authLogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        // $auth = Auth::attempt(['username' => $username, 'password' => $password]);
        // dd($auth);
        if(Auth::attempt(['username' => $username, 'password' => $password]))
        {
            return redirect()->route('admin.index');
        }
        else
        {
            return redirect()->route('auth.login');
        }
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
