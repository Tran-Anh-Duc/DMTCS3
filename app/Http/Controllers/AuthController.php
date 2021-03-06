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
           "email" => "required|email",
           "password" => "required"
        ]);
        $data = $request->only("email", "password");
        if (Auth::attempt($data)) {
            toastr()->success("Hello, ". Auth::user()->name ?? "");
            return redirect()->route("tables.index");
        }else{
            toastr()->error("User or password not correct");
            return redirect()->back();
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
           "email" => "required|email",
           "password" => "required| max:20 | min:5"
        ]);
        $data = $request->only("name", "email", "password","avatar");
        $avatar = $request->file('file');
        $data["password"] = Hash::make($request->password);
        $data["avatar"] = time().'.'.$avatar->getClientOriginalExtension();
        $path = public_path('image');
        $avatar->move($path, $data['avatar']);
        User::query()->create($data);
        toastr()->success("Register success");
        return redirect()->route("login.form");
    }

    public function showFormChangePassword()
    {
        return view("backend.auth.changePassword");
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();
        $currentPassword = $user->password;
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:5',
            'confirmPassword' => 'required|same:newPassword',

        ]);
        if (!Hash::check($request->currentPassword, $currentPassword)) {
            return redirect()->back()->withErrors(['currentPassword' => 'Incorrect password']);
        }
        $user->password = Hash::make($request->newPassword);
        $user->save();
        toastr()->success('?????i m???t kh???u th??nh c??ng');
        return redirect()->route('login.form');
    }


}
