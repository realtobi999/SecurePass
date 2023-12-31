@extends("layout.vault")

@section("additional-head-elements")

<script src="{{ asset('js/generatePassword/index.js') }}" defer></script>

@endsection

@section("content")
<div class="h-screen flex items-center justify-center">
    <div class="max-w-md w-full p-6 bg-white rounded-md shadow-md ">
        <h2 class="border-b-2 border-blue-500 text-2xl font-semibold pb-2 mb-4">Generate a <span class="text-blue-500 hover:text-blue-600 transition">Password!</span></h2>
        <p class="text-gray-500 mb-4">Click on the password to copy it!</p>
        <div class="flex flex-col space-y-2">
            @csrf

            {{-- Password Display --}}
            <div class="cursor-pointer flex items-center justify-between text-xl border-2 border-blue-500 shadow shadow-blue-500 rounded p-4">
                <p onclick="copyText()" id="passwordDisplay" class="truncate w-full font-semibold text-gray-700 text-lg"></p>
            </div>

            {{-- Password Length Input --}}
            <div class="flex items-center mt-4">
                <label class="mr-2 text-gray-700" for="charactersRange">Characters</label>
                <input name="range" type="range" min="1" max="50" value="20" id="charactersRange" class="flex-grow appearance-none bg-gray-200 h-2 rounded-lg focus:outline-none">
                <input name="passwordLength" class="rounded-lg ml-4 w-16 text-center border-2 border-none text-xl" type="number" min="1" max="50" value="20" id="charactersNumber">
            </div>

            {{-- Checkbox Inputs --}}
            @include("components.checkbox", ["label" => "Include Uppercase", "value" => "includeUppercase"])

            @include("components.checkbox", ["label" => "Include Numbers", "value" => "includeNumbers"])

            @include("components.checkbox", ["label" => "Include Symbols", "value" => "includeSymbols"])

            {{-- Generate Button --}}
            <button type="button" id="generateButton" class="mt-4 bg-blue-500 text-white rounded-lg py-2 hover:bg-blue-600 transition">
                Generate Password
            </button>
        </div>
    </div>
</div>


<!-- JS success message -->
@include("components.JS-flash")

@endsection
