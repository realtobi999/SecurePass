  @props(["keepData" => false])
  
  <!-- Website Name Input -->
  <div class="mb-4">
      <label for="website" class="block text-sm font-medium text-gray-600">Website Name</label>
      <input type="text" value = "{{ $keepData ? old('website') : '' }}" id="website" name="website" class="mt-1 p-2 block w-full border rounded-md bg-gray-100 ">
  </div>

  <!-- Uri Input -->
  <div class="mb-4">
      <label for="uri" class="block text-sm font-medium text-gray-600">URI</label>
      <input type="text" value = "{{ $keepData ? old('uri') : '' }}" id="uri" name="uri" class="mt-1 p-2 block w-full border rounded-md bg-gray-100 ">
  </div>

  <!-- Username Input -->
  <div class="mb-4">
      <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
      <input type="text" value = "{{ $keepData ? old('username') : '' }}" id="username" name="username" class="mt-1 p-2 block w-full border rounded-md bg-gray-100">
  </div>
