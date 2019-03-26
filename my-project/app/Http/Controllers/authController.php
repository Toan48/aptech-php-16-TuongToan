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

    public function index()
    {
        $users = User::get();
        return view('adminUsers.list-users',  ['users' => $users]);
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
        return view('adminUsers.create');
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('auth.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }

    public function show($id)
    {   
        $user = User::find($id);
        return view('adminUsers.show', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('adminUsers.edit', ['user'=>$user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('auth.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('auth.index');
    }
}
