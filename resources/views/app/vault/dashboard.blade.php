@extends('layout.vault')

@section('additional-head-elements')
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <script defer src="/js/vault-dashboard.js"></script>
@endsection

@section('content')
    {{-- Page title --}}
    <div class="border-b-4 border-blue-400">
        <h1 class="text-3xl p-4 text-blue-700 font-bold">
            Stored Passwords
        </h1>
        <p class="text-lg p-4 text-gray-500">
            <span class="font-bold">Copy</span> a password or username by clicking on it!
        </p>
    </div>

    {{-- Passwords table --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6 ">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Edit
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Website
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Username
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Password
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Last Update
                    </th>
                </tr>
            </thead>
            {{-- All users passwords --}}
            <tbody class="">
                @include("app.password.index")
            </tbody>
        </table>

      
        {{-- Update Password Form --}}
        @include("app.password.update")

        {{-- Delete Password --}}
        @include("app.password.delete")
        
    
    @endsection
