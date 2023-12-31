<?php

namespace App\Http\Controllers;

use App\Models\Passwords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Password;

class PasswordController extends Controller
{

    public static function index()
    {
        return auth()->user()->passwords;
    }


    public function store()
    {
        try {
            $attributes = request()->validate([
                "website" => ["required", "string", "max:255"],
                "username" => ["required", "string", "max:255"],
                "password" => ["required", "string", "min:8", "max:255"],
                "uri" => ["nullable", "string", "max:255"],
            ]);

            $attributes["user_id"] = auth()->user()->id;

            Passwords::create($attributes);

            return redirect("/vault/dashboard")->with("success", "Password saved!");
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Catch validation errors
            return redirect("/vault/store")->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Catch other exceptions (authentication errors)
            return redirect("/vault/dashboard")->with("error", $e->getMessage());
        }
    }


    public function update()
    {
        try {
            $attributes = request()->validate([
                "website" => ["nullable", "max:255"],
                "username" => ["nullable", "max:255"],
                "password" => ["nullable", "min:8", "max:255"],
                "uri" => ["nullable", "string", "max:255"],
            ]);
            $attributes = $this->WhereNotNull($attributes);

            $this->authorizeUserOrFail();

            Passwords::find(request("passwordID"))->update($attributes);
            return redirect("/vault/dashboard")->with("success", "Successfully updated!");
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Catch validation errors
            return redirect("/vault/dashboard")->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Catch other exceptions (authentication errors)
            return redirect("/vault/dashboard")->with("error", $e->getMessage());
        }
    }


    public function destroy()
    {
        try {
            $this->authorizeUserOrFail();

            Passwords::find(request("passwordID"))->delete();
            return redirect("/vault/dashboard")->with("success", "Password deleted!");
        } catch (\Exception $e) {
            return redirect("/vault/dashboard")->with("error", $e->getMessage());
        }
    }


    public function authorizeUserOrFail()
    {
        $passwordID = Passwords::find(request("passwordID"));

        if ($passwordID && ($passwordID->user_id != auth()->user()->id)) {
            throw new \Exception("Unauthorized action!");
        }
    }

    public function whereNotNull($array)
    {

        $collection = collect($array);

        $filteredAttributes = $collection->filter(function ($value) {
            return $value !== null;
        });

        return $filteredAttributes->toArray();
    }

}
