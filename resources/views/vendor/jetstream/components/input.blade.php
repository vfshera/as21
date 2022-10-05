@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'border-gray-300 focus:border-primary-2 focus:ring focus:ring-primary-2 focus:ring-opacity-50 rounded-md shadow-sm',
]) !!}>
