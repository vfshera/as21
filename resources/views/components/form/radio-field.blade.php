<div class="radio-group">
    <label class="text-lg font-semibold ">{{ $label }}</label>

    <label class="custom-check">
        <input type="checkbox" name="{{ $name }}" {{ $attributes }} />
        <span class="checkmark" style=" background-image: url('/storage/images/checkmark.svg')"></span>
    </label>
</div>
