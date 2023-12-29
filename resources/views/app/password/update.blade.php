<div id="editPassword" class="bg-black bg-opacity-50 fixed top-0 left-0 w-full h-full z-40 hidden">
    <div class="h-screen flex items-center justify-center">
        <div class="max-w-md w-full p-6 bg-white rounded-md shadow-md z-50">
            <h2 class="text-2xl font-semibold mb-0">Edit your password</h2>
            <!-- Password Form -->
            <form action="{{ route('password.update') }}" method="POST" class="space-y-4">
                @csrf

                @method("PUT")

                <input type="hidden" name="passwordID" value="">

                <!-- Website Name Input -->
                <div class="mb-4">
                    <label for="website" class="block text-sm font-medium text-gray-600">Website Name</label>
                    <input type="text" id="website" name="website" required
                        class="mt-1 p-2 block w-full border rounded-md bg-gray-100 ">
                </div>

                <!-- Username Input -->
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
                    <input type="text" id="username" name="username" required
                        class="mt-1 p-2 block w-full border rounded-md bg-gray-100">
                </div>

                <!-- Password Input -->
                <div class="mb-4 relative" x-data="{ isVisible: false }">
                    <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                    <div class="flex items-center">
                        <input type="password" id="password" name="password" required
                            class="mt-1 p-2 block w-full border rounded-md bg-gray-100 pr-10"
                            x-bind:type="isVisible ? 'text' : 'password'">
                        <button type="button"
                            class="absolute right-2 top-1/2 transform -translate-y-1/2 focus:outline-none mt-3"
                            @click="isVisible = !isVisible">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end space-x-2">
                    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">
                        Change
                    </button>
                    <button type="button" onclick="showEditPassword()"
                        class="w-full bg-red-500 text-white p-2 rounded-md hover:bg-red-600">
                        Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>