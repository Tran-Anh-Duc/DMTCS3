<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view("backend.auth.login");
    }

    public function login(Request $request)
    {
        $request->validate([
           "email" => "required",
           "password" => "required"
        ]);
        $data = $request->only("email", "password");
        if (Auth::attempt($data)) {
            return redirect()->route("users.list");
        }else{
            dd("login fail" );
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route("login.form");
    }

    public function showFormRegister()
    {
        return view("backend.auth.register");
    }

    public function register(Request $request)
    {
        $request->validate([
           "name" => "required",
           "email" => "required",
           "password" => "required|min:6"
        ]);
        $data = $request->only("name", "email", "password","avatar");
        $avatar = $request->file('file');
        $data["password"] = Hash::make($request->password);
        $data["avatar"] = time().'.'.$avatar->getClientOriginalExtension();
        $path = public_path('/uploads');
        $avatar->move($path, $data['avatar']);
        User::query()->create($data);
        return redirect()->route("login.form");
    }


}
