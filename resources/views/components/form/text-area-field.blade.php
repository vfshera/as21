<div class="input-group">
    <label>{{ $label }}</label>
    {{-- <div className="field-errors">{errors}</div> --}}
    <textarea cols="{{ $cols }}" rows="{{ $rows }}" name="{{ strtolower($label) }}"
        placeholder="{{ $placeholder }}"></textarea>
</div>
