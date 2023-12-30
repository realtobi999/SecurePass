<?php

namespace App\Http\Controllers;


class PasswordGenerateController extends Controller
{
    private $passwordLength;
    private $uppercase;
    private $number;
    private $symbols;

    private $allLetters = "abcdefghijklmnopqrstuvwxyz";
    private $allNumbers = "0123456789";
    private $allSymbols = "\'!#$%&()*+,-./:;<=>?@[\\]^_`{|}~";

    public $generatedPassword = "";

    public function __construct()
    {
        $this->passwordLength = request('passwordLength', 20);
        $this->uppercase = request("includeUppercase") ? true : false;
        $this->number = request("includeNumbers") ? true : false;
        $this->symbols = request("includeSymbols") ? true : false;
    }

    public function index()
    {
        $password = $this->generate($this->passwordLength);

        return $this->loadview($password);
    }


    public function generate($length)

    {
        $usersCharacters = $this->chosenCharacters();
        $charSetSize = strlen($usersCharacters);

        return $this->randomize($length, $usersCharacters, $charSetSize);
    }

    public function chosenCharacters()
    {
        $characters = $this->allLetters;
        if ($this->uppercase) {
            $characters .= strtoupper($this->allLetters);
        }
        if ($this->number) {
            $characters .= $this->allNumbers;
        }
        if ($this->symbols) {
            $characters .= $this->allSymbols;
        }
        return $characters;
    }

    public function randomize($length, $usersCharacters, $charSetSize)
    {
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = mt_rand(0, $charSetSize - 1);
            $this->generatedPassword .= $usersCharacters[$randomIndex];
        }

        return $this->generatedPassword;
    }

    public function loadview($password)
    {
        if (request()->expectsJson()) {
            return response()->json(['password' => $password]);
        }

        return view("app.password.generate", ['password' => $password]);
    }
}
