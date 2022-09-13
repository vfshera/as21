<div class="input-group {{ $inputType == 'file' ? 'file-input-group' : '' }}">

    @if ($inputType != 'file')
        <label for="{{ strtolower($label) }}">{{ $label }}</label>
    @endif

    <input type="{{ $inputType ?? 'text' }}" name="{{ strtolower($label) }}" placeholder="{{ $placeholder }}"
        value="{{ $value }}" {{ $attributes }} />

    @if ($inputType == 'file')
        <label id="file-label" for="{{ strtolower($label) }}">&checkmark; {{ $placeholder }}</label>
    @endif

</div>
