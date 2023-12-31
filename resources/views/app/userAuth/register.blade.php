@extends("layout.home")



@section("content")


@include("components.form.title", ["text" => "Register a new account!"])


<div class="mt-10 mb-5">
    <form class="max-w-sm mx-auto bg-gray-200 p-6 rounded-lg shadow" action="/vault/register" method="POST">
        @csrf

        {{-- Email Input --}}
        @include("components.form.userAuthInput", [
        "value" => "email",
        "label" => "Your Email",
        "type" => "email",
        "placeholder" => "name@gmail.com"])

        {{-- Name Input --}}
        @include("components.form.userAuthInput", [
        "value" => "name",
        "label" => "How should we call you?",
        "type" => "text",
        "placeholder" => "Your Name"])

        {{-- Password Input --}}
        @include("components.form.userAuthInput", [
        "value" => "password",
        "label" => "Main Password",
        "type" => "password",
        "hasText" => true])

        {{-- Confirm Password Input --}}
        @include("components.form.userAuthInput", [
        "value" => "passwordConfirmation",
        "label" => "Confirm Password",
        "type" => "password"])


        {{-- Errors --}}
        @include("components.errors")


        <p class="mb-4 text-sm">
        Already have an account? Great! 
        <a href="/vault/login" class="text-blue-600 hover:underline">
        Login to vault</a>.</p>
        
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Register</button>
    </form>
</div>


@endSection
