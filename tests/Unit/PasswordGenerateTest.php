<?php

use App\Http\Controllers\PasswordGenerateController;
use Illuminate\Foundation\Testing\Concerns\MakesHttpRequests;
use Tests\TestCase;

class PasswordGenerateTest extends TestCase
{
    use MakesHttpRequests;

    public function testRandomizeLengthIsValid()
    {
        $passwordGenerate = new PasswordGenerateController();
        $length = 12;
        $usersCharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        $charSetSize = strlen($usersCharacters);

        $passwordTestCase1 = $passwordGenerate->randomize($length, $usersCharacters, $charSetSize);

        $this->assertEquals($length, strlen($passwordTestCase1));
    }

    public function testGenerateTwoDifferentPasswords()
    {
        $this->app->instance('request', request());

        request()->merge([
            'length' => 12,
            "uppercase" => true,
            "numbers" => true,
            "special" => true
        ]);

        $passwordGenerate = $this->app->make(PasswordGenerateController::class);

        $passwordTestCase1 = $passwordGenerate->generate(12);
        $passwordTestCase2 = $passwordGenerate->generate(12);

        $this->assertNotEquals($passwordTestCase1, $passwordTestCase2);
    }
}
