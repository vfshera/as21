<div class="input-group {{ $inputType == 'file' ? 'file-input-group' : '' }}">

    @if ($inputType != 'file')
        <label for="{{ strtolower($label) }}">{{ $label }}</label>
    @endif

    @error($name)
        <div className="field-errors">{{ $message }}</div>
    @enderror

    <input type="{{ $inputType ?? 'text' }}" name="{{ $name ?? strtolower($label) }}" placeholder="{{ $placeholder }}"
        value="{{ $value }}" {{ $attributes }} />

    @if ($inputType == 'file')
        <label id="file-label" for="{{ strtolower($label) }}">&checkmark; {{ $placeholder }}</label>
    @endif

</div>
