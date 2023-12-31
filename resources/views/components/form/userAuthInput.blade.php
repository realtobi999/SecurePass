@props(['value', 'label', 'type', 'placeholder' => null, 'hasText' => false])
<div class="mb-5">
    <label for="{{ $value }}" class="block mb-2 text-sm font-medium text-gray-900">{{ $label }}</label>
    <input type="{{ $type }}" 
            name="{{ $value }}" 
            id="{{ $value }}" 
            value="{{ old($value) }}" 
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
            placeholder="{{ $placeholder ? $placeholder : '' }}"
            required>
    @if($hasText)
        <p id="helper-text-explanation" class="text-sm text-gray-500">Please pick a strong password you wont be able to restore it. Atleast 8 characters</p>
    @endif
</div>
