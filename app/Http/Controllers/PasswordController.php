<?php

namespace App\Http\Controllers;

use App\Models\Passwords;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index()
    {
        return view("app.vault.store");
    }

    public function store()
    {
        //dd(auth()->user()->id);
        $attributes = request()->validate([
            "website" => ["required", "string"],
            "username" => ["required", "string"],
            "password" => ["required", "string"],
        ]);
    
        $attributes["user_id"] = auth()->user()->id; 

        Passwords::create($attributes);
    
        return redirect("/vault/dashboard")->with("success", "Password saved!");
    }

    public function update()
    {
        dd(request()->all());
    }

    public function destroy()
    {
        dd(request()->all());
    }
    
}
