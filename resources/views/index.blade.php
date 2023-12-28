@extends("layout.home")

@section("content")

<div class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="max-w-md w-full p-6 bg-white rounded-md border border-gray-300 shadow-md">
        <h2 class="text-3xl font-semibold mb-4">Welcome to <span class="text-blue-500 hover:text-blue-600 transition">SecurePass</span></h2>
        <p class="mb-5">Continue to your Vault and store passwords or register a brand new account!</p>
        
        <div class="grid grid-cols-1 gap-4">

            <a href="/vault/login" class="block w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">
                Continue to Vault
            </a>
            <a href="/vault/register" class="block w-full bg-green-500 text-white p-2 rounded-md hover:bg-green-600">
                Register
            </a>
        </div>
    </div>
</div>

@endsection