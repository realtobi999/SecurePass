@extends("layout.home")



@section("content")

<div>
    <h1 class="font-bold text-center mt-10 mb-6 text-4xl ">SecurePass <span class="text-blue-300 hover:text-blue-600 transition">Vault</span></h1>
    <p class="mt-2 text-m text-gray-500 text-center mb-2">Register a new account!</p>
</div>
<div class="mt-10 mb-5">
    <form class="max-w-sm mx-auto bg-gray-200 p-6 rounded-lg shadow" action="/vault/register" method="POST">
    @csrf
    <div class="mb-5">
        <label for="email"  class="block mb-2 text-sm font-medium text-gray-900">Your Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@gmail.com" required>
    </div>
        <div class="mb-5">
        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">How should we call you?</label>
        <input type="text" name="username" id="username" value="{{ old('username') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="happyponny151" required>
    </div>
    <div class="mb-5">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Main Password</label>
        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500">Please pick a strong password you wont be able to restore it. Atleast 8 characters</p>
    </div>
        <div class="mb-5">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Repeat Password</label>
        <input type="password" name="passwordConfirmation" id="passwordConfirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
    </div>
    @foreach($errors->all() as $error)
        <li class="text-red-500 text-sm mt-3 mb-3">{{ $error }}</li>
    @endforeach
    <p class="mb-4 text-sm">Already have an account? Great! <a href="/vault/login" class="text-blue-600 hover:underline">Login to vault</a>.</p>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Register</button>
    </form>
</div>


@endSection