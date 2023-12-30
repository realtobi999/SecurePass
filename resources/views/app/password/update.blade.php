<div id="editPassword" class="bg-black bg-opacity-50 fixed top-0 left-0 w-full h-full z-40 hidden">
    <div class="h-screen flex items-center justify-center">
        <div class="max-w-md w-full p-6 bg-white rounded-md shadow-md z-50">
            <h2 class="text-2xl font-semibold mb-4">Edit your <span class="text-blue-500 hover:text-blue-600 transition">Password!</span></h2>
            <!-- Update Form -->
            <form action="{{ route('password.update') }}" method="POST" class="space-y-4">
                @csrf

                @method("PUT")

                <input type="hidden" name="passwordID" value="">

                <!-- Website Name Input -->
                <div class="mb-4">
                    <label for="website" class="block text-sm font-medium text-gray-600">Website Name</label>
                    <input type="text" id="website" name="website" 
                        class="mt-1 p-2 block w-full border rounded-md bg-gray-100 ">
                </div>

                <!-- Uri Input -->
                <div class="mb-4">
                    <label for="uri" class="block text-sm font-medium text-gray-600">URI</label>
                    <input type="text" id="uri" name="uri" 
                        class="mt-1 p-2 block w-full border rounded-md bg-gray-100 ">
                </div>

                <!-- Username Input -->
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
                    <input type="text" id="username" name="username" 
                        class="mt-1 p-2 block w-full border rounded-md bg-gray-100">
                </div>

                <!-- Password Input -->
                <div class="mb-4 relative" x-data="{ isVisible: false }">
                    <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                     @include("components.passwordInput")
                </div>
                
                <div id="validationErrors" class="text-red-500 text-sm mt-3 mb-3">

                    @if ($errors->any())
                        @foreach($errors->all() as $error)
                            <li class="text-red-500 text-sm mt-3 mb-3">{{ $error }}</li>
                        @endforeach
                    @endif

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

