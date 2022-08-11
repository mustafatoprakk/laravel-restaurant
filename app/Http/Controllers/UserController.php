<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    // Register
    public function register()
    {
        if (!Auth::check()) {
            $data["title"] = "Register";
            return view("register", $data);
        } else {
            return redirect()->intended("/");
        }
    }
    public function registerAction(UserStoreRequest $request)
    {
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        return redirect()->route("login")->with("message", "Register succes. Please login");
    }

    // Login
    public function login()
    {
        if (!Auth::check()) {
            $data["title"] = "Login";
            return view("login", $data);
        } else {
            return redirect()->intended("/");
        }
    }
    public function loginAction(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended("/");
        }

        return back()->withErrors("password", "Wrong email or password");
    }


    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");
    }
}
