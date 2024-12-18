<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        if (Auth::attempt($validate)) {
            return redirect()->route("dashboard");
        }

        return redirect()->back()->with("error", "Email atau password anda");
    }
}
