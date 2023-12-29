@foreach ($passwords as $password)
    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 relative">
        <td class="px-6 py-4 relative" onclick="toggleDropdown(event, {{ $password->id }})">
            <div class="dropdown-toggle cursor-pointer">
                <ion-icon name="ellipsis-vertical-outline"></ion-icon>
            </div>
            <!-- Dropdown panel, hidden by default -->
            <div class="hidden fixed mt-2 w-30 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50 "
                id="dropdownMenu{{ $password->id }}">
                <div class="py-1" role="menu" aria-orientation="vertical">
                    <div onclick="showEditPassword()"
                        class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 cursor-pointer" role="menuitem"
                        tabindex="-1">
                        Edit
                    </div>
                    <div onclick="copyText('{{ $password->password }}')"
                        ontouchstart="copyText('{{ $password->password }}')"
                        class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 cursor-pointer" role="menuitem"
                        tabindex="-1">
                        Copy Password
                    </div>
                    <div onclick="copyText('{{ $password->username }}')"
                        ontouchstart="copyText('{{ $password->username }}')"
                        class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 cursor-pointer" role="menuitem"
                        tabindex="-1">
                        Copy Username
                    </div>
                    <div onclick="showDeletePassword()"
                        class="text-red-700 block px-4 py-2 text-sm hover:bg-gray-100 cursor-pointer font-semibold"
                        role="menuitem" tabindex="-1">
                        Delete
                    </div>
                </div>
            </div>
        </td>
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{ $password->website }}
        </th>
        <td class="px-6 py-4 cursor-pointer" onclick="copyText('{{ $password->username }}')">
            {{ $password->username }}
        </td>
        <td class="px-3 py-2">
            <div type="password"  readonly class="border-none rounded-lg cursor-pointer"
                onclick="copyText('{{ $password->password }}')">
                <ion-icon name="key"></ion-icon>
            </div>
        </td>
        <td class="px-6 py-4">
            {{ $password->updated_at->diffForHumans() }}
        </td>
    </tr>
@endforeach
