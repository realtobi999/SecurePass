<div id="editPassword" class="bg-black bg-opacity-50 fixed top-0 left-0 w-full h-full z-40 hidden">
    <div class="h-screen flex items-center justify-center">
        <div class="max-w-md w-full p-6 bg-white rounded-md shadow-md z-50">
            <h2 class="text-2xl font-semibold mb-4">Edit your <span class="text-blue-500 hover:text-blue-600 transition">Password!</span></h2>
            <!-- Update Form -->
            <form action="{{ route('password.update') }}" method="POST" class="space-y-4">
                @csrf

                @method("PUT")

                <input type="hidden" name="passwordID" value="">


                <!-- Website, URI, Username Input -->
                @include("components.form._websiteUriUsername")


                <!-- Password Input -->
                @include("components.form.password", ["isRequired" => false])
                
                @include("components.errors")

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

