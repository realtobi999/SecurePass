<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function index()
    {
        return view("app.userAuth.register");
    }

    public function store()
    {
        $attributes = request()->validate([
            "email" => ["required", "email", Rule::unique("users", "email"), "max:255"],
            "username" => ["required", "min:3", "max:255", Rule::unique("users", "username")],
            "password" => ["required", "min:8", "max:255"],
            "passwordConfirmation" => ["required", "max:255", "same:password"]    
        ]);

        $users = User::create($attributes);

        return redirect("/vault/login")->with("success", "Your account has been created!");
    }
}
