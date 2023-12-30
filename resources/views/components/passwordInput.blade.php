 <div class="flex items-center">
     <input type="password" id="password" name="password" required class="mt-1 p-2 block w-full border rounded-md bg-gray-100 pr-10" x-bind:type="isVisible ? 'text' : 'password'">
     <button type="button" class="absolute right-2 top-1/2 transform -translate-y-1/2 focus:outline-none mt-3" @click="isVisible = !isVisible">
         <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
             </path>
         </svg>
     </button>
 </div>
