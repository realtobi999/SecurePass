<div id="deletePassword" class="bg-black bg-opacity-50 fixed top-0 left-0 w-full h-full z-40 hidden">
    <div class="h-screen flex items-center justify-center">
        <div class="max-w-md w-full p-6 bg-white rounded-md shadow-md z-50">
            <h2 class="text-2xl font-semibold mb-0">Delete Password?</h2>

            <form action="{{ route('password.destroy') }}" method="POST" class="space-y-4">
                @csrf

                @method('DELETE')
                
                <input type="hidden" name="passwordID" value="InitialValue">

                <div class="flex justify-end space-x-2 text-center">
                    <button type="submit"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                        Yes, Delete
                    </button>
                    <button type="button" onclick="showDeletePassword()"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        No, Cancel
                    </button>
                 </div>
            </form>
        </div>
    </div>
</div>
