@if (session()->has('success'))
    <div id="successMessage" class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-xs">
        <p>{{ session('success') }}</p>
    </div>

    <script>
        var successMessage = document.getElementById('successMessage');

        // Set a timeout to hide the div after 5 seconds
        setTimeout(function() {
            successMessage.style.display = 'none';
        }, 5000);
    </script>
@else
    <div id="successMessage" class="hidden fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-xs">
        <p id="successMessageText"></p>
    </div>
@endif
