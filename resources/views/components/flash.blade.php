@if (session()->has('success'))
    <!-- Success message -->
    <div id="successMessage" class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-xl z-50">
        <p>{{ session('success') }}</p>
    </div>
@else
    @if ($errors->any())
        <!-- Validation errors -->
        <div id="errorMessage" class="fixed bg-red-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-xl z-50">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @else
        <!-- JS success message -->
        <div id="successMessage"
            class="hidden fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-xl z-50">
            <p id="successMessageText"></p>
        </div>
    @endif
@endif

<script>
    var successMessage = document.querySelector('#successMessage')
    var errorMessage = document.querySelector('#errorMessage')
    // Set a timeout to hide the div after 5 seconds
    setTimeout(function() {
        if (successMessage || ) {
            successMessage.style.display = 'none';
        }else {
            errorMessage.style.display = 'none';
        }
    }, 5000);

</script>

