<?php

namespace App\Http\Controllers;

use App\Models\Passwords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class PasswordController extends Controller
{

    public static function index()
    {
        return auth()->user()->passwords;
    }

    /**
     * Store a new password.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Update an existing password.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update()
    {
        try {
            $attributes = request()->validate([
                "website" => ["max:255"],
                "username" => ["max:255"],
                "password" => ["nullable", "min:8", "max:255"],
            ]);

            $this->authorizeUserOrFail();

            Passwords::find(request("passwordID"))->update($attributes);

            return redirect("/vault/dashboard")->with("success", "Password updated!");
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Catch validation errors
            return redirect("/vault/dashboard")->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Catch other exceptions
            return redirect("/vault/dashboard")->with("error", $e->getMessage());
        }
    }

    /**
     * Delete a password.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Authorize the user for the requested password action.
     *
     * @throws \Exception
     */
    public function authorizeUserOrFail()
    {
        $passwordID = Passwords::find(request("passwordID"));

        if ($passwordID && ($passwordID->user_id != auth()->user()->id)) {
            throw new \Exception("Unauthorized action!");
        }
    }
}
