@extends("layout.vault")

@section("additional-head-elements")
<script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

@endsection 


@section("content")

<div class="h-screen flex items-center justify-center">
    <div class="max-w-md w-full p-6 bg-white rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Store a new <span class="text-blue-500 hover:text-blue-600 transition">Password!</span></h2>

        <!-- Password Form -->
        <form action="/vault/store" method="post" class="space-y-4">
            @csrf

            <!-- Website Name Input -->
            <div class="mb-4">
                <label for="website" class="block text-sm font-medium text-gray-600">Website Name</label>
                <input placeholder="Instagram" type="text" id="website" name="website" value="{{ old('website') }}" required class="mt-1 p-2 block w-full border rounded-md bg-gray-100">
            </div>

            <!-- Website Name Input -->
            <div class="mb-4">
                <label for="uri" class="block text-sm font-medium text-gray-600">URI <span class="text-gray-500">(optional)</span></label>
                <input placeholder="instagram.com" type="text" id="uri" name="uri" value="{{ old('uri') }}" class="mt-1 p-2 block w-full border rounded-md bg-gray-100">
            </div>

            <!-- Username Input -->
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
                <input placeholder="happyponny151" type="text" id="username" name="username" value="{{ old('username') }}" required class="mt-1 p-2 block w-full border rounded-md bg-gray-100">
            </div>

            <!-- Password Input -->
            <div class="mb-4 relative" x-data="{ isVisible: false }">
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                 @include("components.passwordInput")
            </div>
            <p class="mt-2 text-sm text-gray-500">Please pick a strong password or use our <a target="_blank" href="/vault/password-generator" class="text-blue-500 hover:text-blue-600 transition">Password Generator</a>!



            <div id="validationErrors" class="text-red-500 text-sm mt-3 mb-3">

                @if ($errors->any())
                    @foreach($errors->all() as $error)
                        <li class="text-red-500 text-sm mt-3 mb-3">{{ $error }}</li>
                    @endforeach
                @endif

            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">
                Add Password
            </button>
        </form>
    </div>
</div>

@endsection

