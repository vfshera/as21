<div class="input-group">
    <label>{{ $label }}</label>
    @error($name)
        <div className="field-errors">{{ $message }}</div>
    @enderror
    <textarea cols="{{ $cols }}" rows="{{ $rows }}" name="{{ strtolower($label) }}"
        placeholder="{{ $placeholder }}" {{ $attributes }}></textarea>
</div>
