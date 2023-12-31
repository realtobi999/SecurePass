<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SecurePass Vault</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    @yield("additional-head-elements")
    
</head>

<body class="bg-gray-100">

    {{-- HEADER --}}
    @include("components.partials.header")

    {{-- SIDEBAR--}}
    @include("components.partials.sidebar")

    {{-- CONTENT --}}
    <div class="p-4 sm:ml-64 bg-gray-100 h-screen">
        <div class="p-4 dark:border-gray-700 mt-14 ">
            @yield('content')
        </div>
    </div>


    {{-- FLASH --}}
    @include("components.flash")


    {{-- ICONS --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    {{-- FLOWBITE --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
