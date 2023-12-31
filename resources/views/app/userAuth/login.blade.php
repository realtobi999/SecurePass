@extends("layout.home")

@section("content")

<div class="mt-10 mb-5">
    
    @include("components.form.title", ["text" => "Login into your Vault!"])

    <form class="max-w-sm mt-10 mx-auto bg-gray-200 p-6 rounded-lg shadow" action="/vault/login" method="POST">
        @csrf

        {{-- Email Input --}}
        @include("components.form.userAuthInput", [
        "value" => "email",
        "label" => "Email",
        "type" => "email",
        "placeholder" => "name@gmail.com"])

        {{-- Password Input --}}
        @include("components.form.userAuthInput", ["value" => "password",
        "label" => "Main Password",
        "type" => "password"])

        @include("components.errors")

        <p class="mb-4 mt-6 text-sm">
        Dont have a account? 
        <a href="/vault/register" class="text-blue-600 hover:underline hover:text-blue-800 transition">
        Register here</a>!</p>
        
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Continue</button>
    </form>
</div>

@endsection
