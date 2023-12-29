<?php

namespace App\Http\Controllers;

use App\Models\Passwords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class PasswordController extends Controller
{
    public function index()
    {
        return view("app.vault.store");
    }

    public function store()
    {
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
        $attributes = request()->validate([
            "website" => ["required", "string"],
            "username" => ["required", "string"],
            "password" => ["required", "string"],
        ]);

        Passwords::find(request("passwordID"))->update($attributes);

        return redirect("/vault/dashboard")->with("success", "Password updated!");
    }

    public function destroy()
    {
        Passwords::find(request("passwordID"))->delete();

        return redirect("/vault/dashboard")->with("success", "Password deleted!");
    }
}
