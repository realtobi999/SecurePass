@foreach ($passwords as $password)
    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 relative">

        <!-- Dropdown menu -->
        <td class="px-6 py-4 relative" onclick="toggleDropdown(event, {{ $password->id }})">


            <div class="dropdown-toggle cursor-pointer">
                <ion-icon name="ellipsis-vertical-outline"></ion-icon>
            </div>
            @include('components.dropdown-password')
            <!-- Dropdown panel, hidden by default -->

        </td>

        <!-- Website Name -->
        <th scope="row"
            class="{{ $password->uri ? 'text-blue-600' : 'text-gray-900 ' }} px-6 py-4 font-medium whitespace-nowrap dark:text-white">
            @if(isset($password->uri))
                <a href="{{ $password->uri }}" target="_blank">
                    {{ $password->website }}
                </a>
            @else
            {{ $password->website }}
            @endif
        </th>

        <!-- Username -->
        <td class="px-6 py-4 cursor-pointer" onclick="copyText('{{ $password->username }}')">
            {{ $password->username }}
        </td>

        <!-- Password -->
        <td class="px-3 py-2">
            <div type="password" readonly class="border-none rounded-lg cursor-pointer"
                onclick="copyText('{{ $password->password }}')">
                <ion-icon name="key"></ion-icon>
            </div>
        </td>

        <!-- Last Update -->
        <td class="px-6 py-4">
            <time>{{ $password->updated_at->diffForHumans() }}</time>
        </td>

    </tr>
@endforeach
