<div class="hidden fixed mt-2 w-30 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50 "
    id="dropdownMenu{{ $password->id }}">
    <div class="py-1" role="menu" aria-orientation="vertical">
        <div onclick="showEditPassword()" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 cursor-pointer"
            role="menuitem" tabindex="-1">
            Edit
        </div>
        <div onclick="copyText('{{ $password->password }}')" ontouchstart="copyText('{{ $password->password }}')"
            class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 cursor-pointer" role="menuitem"
            tabindex="-1">
            Copy Password
        </div>
        <div onclick="copyText('{{ $password->username }}')" ontouchstart="copyText('{{ $password->username }}')"
            class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 cursor-pointer" role="menuitem"
            tabindex="-1">
            Copy Username
        </div>
        <div onclick="showDeletePassword()"
            class="text-red-700 block px-4 py-2 text-sm hover:bg-gray-100 cursor-pointer font-semibold" role="menuitem"
            tabindex="-1">
            Delete
        </div>
    </div>
</div>
