<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function index()
    {
        return view("app.userAuth.login");
    }
    
    public function store()
    {
        $attributes = request()->validate([
            "email" => ["required", "email"],
            "password" => ["required"],
        ]);

        if(! auth()->attempt($attributes)){
            throw ValidationException::withMessages([
                "email" => "Your provided credentials could not be verified.",
            ]);
        }

        session()->regenerate();
        return redirect("/vault/dashboard")->with("success", "You are now logged in!");
    }


}
