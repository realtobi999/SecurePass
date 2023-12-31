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


            <!-- Website, URI, Username Input -->
            @include("components.form._websiteUriUsername", ["keepData" => true])

            <!-- Password Input -->
            @include("components.form.password")


            <p class="mt-2 text-sm text-gray-500">
            Please pick a strong password or use our 
            <a target="_blank" href="/vault/password-generator" class="text-blue-500 hover:text-blue-600 transition">
            Password Generator</a>!



            @include("components.errors")

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">
                Add Password
            </button>
        </form>
    </div>
</div>

@endsection

