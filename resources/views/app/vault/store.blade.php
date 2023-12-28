 @extends("layout.vault")
 
@section("content")
    
 <div class="h-screen flex items-center justify-center">
     <div class="max-w-md w-full p-6 bg-white rounded-md shadow-md">
         <h2 class="text-2xl font-semibold mb-4">Add Password to Vault</h2>

         <!-- Password Form -->
         <form action="/api/passwords/add" method="post" class="space-y-4">

             <!-- Website Name Input -->
             <div class="mb-4">
                 <label for="website" class="block text-sm font-medium text-gray-600">Website Name</label>
                 <input type="text" id="website" name="website" required class="mt-1 p-2 block w-full border rounded-md bg-gray-100">
             </div>

             <!-- Username Input -->
             <div class="mb-4">
                 <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
                 <input type="text" id="username" name="username" required class="mt-1 p-2 block w-full border rounded-md bg-gray-100">
             </div>

             <!-- Password Input -->
             <div class="mb-4">
                 <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                 <input type="password" id="password" name="password" required class="mt-1 p-2 block w-full border rounded-md bg-gray-100">
             </div>

             <!-- Submit Button -->
             <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">
                 Add Password
             </button>
         </form>
     </div>
 </div>

@endsection 
