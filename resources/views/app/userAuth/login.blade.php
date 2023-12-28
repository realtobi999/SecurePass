@extends("layout.home")

@section("content")

<div class="mt-10 mb-5">
    <div>
        <h1 class="font-bold text-center mt-10 mb-6 text-4xl ">SecurePass <span class="text-blue-300 hover:text-blue-600 transition">Vault</span></h1>
        <p class="mt-2 text-m text-gray-500 text-center mb-2">Login to your vault</p>
    </div>
    <form class="max-w-sm mx-auto bg-gray-200 p-6 rounded-lg shadow" action="/vault/login" method="POST">
    @csrf
    <div class="mb-5">
        <label for="email"  class="block mb-2 text-sm font-medium text-gray-900">Your Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@gmail.com" required>
    <div class="mb-5 mt-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Main Password</label>
        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
    @foreach($errors->all() as $error)
        <li class="text-red-500 text-sm mt-3 mb-3">{{ $error }}</li>
    @endforeach
    <p class="mb-4 mt-6 text-sm">Dont have a account? <a href="/vault/register" class="text-blue-600 hover:underline hover:text-blue-800 transition">Register here</a>!</p>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Continue</button>
    </form>
</div>

@endsection