@extends("layout.vault")

@section("content")

<div class="border-b-4 border-blue-400">
    <p class="text-3xl p-4 text-blue-700 font-bold">
        Stored Passwords
    </p>
</div>
<div>
    <!-- Table responsive wrapper -->
    <div class="overflow-x-auto bg-white dark:bg-neutral-700">

        <!-- Search input -->
        <div class="relative m-[2px] mb-3 mt-6 mr-5 float-left">
            <label for="inputSearch" class="sr-only">Search </label>
            <input id="inputSearch" type="text" placeholder="Search..." class="block w-64 rounded-lg border dark:border-none dark:bg-neutral-600 py-2 pl-10 pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400" />
            <span class="pointer-events-none absolute left-3 top-1/2 -translate-y-1/2 transform">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-neutral-500 dark:text-neutral-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </span>
        </div>

        <!-- Table -->
        <table class="min-w-full text-left text-xs whitespace-nowrap">

            <!-- Table head -->
            <thead class="uppercase tracking-wider border-b-2 dark:border-neutral-600 border-t">
                <tr>
                    <th scope="col" class="px-6 py-4 border-x dark:border-neutral-600">
                        Site
                    </th>
                    <th scope="col" class="px-6 py-4 border-x dark:border-neutral-600">
                        Username
                    </th>
                    <th scope="col" class="px-6 py-4 border-x dark:border-neutral-600">
                        Password
                    </th>
                    <th scope="col" class="px-6 py-4 border-x dark:border-neutral-600">
                        Updated
                    </th>
                </tr>
            </thead>

            <!-- Table body -->
            <tbody>

                <tr class="border-b dark:border-neutral-600 hover:bg-neutral-100 dark:hover:bg-neutral-600">
                    <th scope="row" class="px-6 py-4 border-x dark:border-neutral-600">
                        Handbag
                    </th>
                    <td class="px-6 py-4 border-x dark:border-neutral-600">$129.99</td>
                    <td class="px-6 py-4 border-x dark:border-neutral-600">
                        30000000 <span style="vertical-align: middle; margin-left: 5px;">
                            <ion-icon class="w-4 h-5" name="copy-outline"></ion-icon>
                        </span>
                    </td>
                    <td class="px-6 py-4 border-x dark:border-neutral-600">In Stock</td>
                </tr>

            </tbody>

        </table>


    </div>
</div>

@endsection
