<div id="validationErrors" class="text-red-500 text-sm mt-3 mb-3">

    @if ($errors->any())
    @foreach($errors->all() as $error)
    <li class="text-red-500 text-sm mt-3 mb-3">{{ $error }}</li>
    @endforeach
    @endif

</div>
