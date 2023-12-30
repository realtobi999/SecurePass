@extends("layout.vault")

@section("additional-head-elements")

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{ asset('js/generatePassword/AJAX.js') }}" defer></script>
<script src="{{ asset('js/generatePassword/index.js') }}" defer></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection

@section("content")
<div class="h-screen flex items-center justify-center">
    <div class="max-w-md w-full p-6 bg-white rounded-md shadow-md ">
        <h2 class="border-b-2 border-blue-500 text-2xl font-semibold pb-2 mb-4">Generate a <span class="text-blue-500 hover:text-blue-600 transition">Password!</span></h2>
        <p class="text-gray-500 mb-4">Click on the password to copy it!</p>
        <form class="flex flex-col space-y-2" action="/vault/password-generator" method="POST" id="password-form">
            @csrf
            <div class="cursor-pointer flex items-center justify-between text-xl border-2 border-blue-500 shadow shadow-blue-500 rounded p-4">
                <p onclick="copyText('{{ $password }}')" id="passwordDisplay" class="truncate w-full font-semibold text-gray-700 text-lg">{{ $password }}</p>
            </div>

            <div class="flex items-center mt-4">
                <label class="mr-2 text-gray-700" for="charactersRange">Characters</label>
                <input name="range" type="range" min="1" max="50" value="20" id="charactersRange" class="flex-grow appearance-none bg-gray-200 h-2 rounded-lg focus:outline-none">
                <input name="passwordLength" class="rounded-lg ml-4 w-16 text-center border-2 border-none text-xl" type="number" min="1" max="50" value="20" id="charactersNumber">
            </div>

            <div class="flex items-center text-gray-700">
                <input name="includeUppercase" type="checkbox" id="includeUppercase" class="rounded-sm">
                <label class="ml-2" for="includeUppercase">Include Uppercase</label>
            </div>

            <div class="flex items-center text-gray-700">
                <input name="includeNumbers" type="checkbox" id="includeNumbers" class="rounded-sm">
                <label class="ml-2" for="includeNumbers">Include Numbers</label>
            </div>

            <div class="flex items-center text-gray-700">
                <input name="includeSymbols" type="checkbox" id="includeSymbols" class="rounded-sm">
                <label class="ml-2" for="includeSymbols">Include Symbols</label>
            </div>

            <button type="submit" class="mt-4 bg-blue-500 text-white rounded-lg py-2 hover:bg-blue-600 transition">
                Generate Password
            </button>
        </form>
    </div>
</div>

<!-- JS success message -->
@include("components.JS-flash")

@endsection
