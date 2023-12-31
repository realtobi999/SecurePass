@props(['label' , 'value'])
<div class="flex items-center text-gray-700">
    <input name="{{ $value }}" type="checkbox" id="{{ $value }}" class="rounded-sm">
    <label class="ml-2" for="{{ $value }}">{{ $label }}</label>
</div>
