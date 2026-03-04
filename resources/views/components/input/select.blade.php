@props([
    'id',
    'name',
    'label',
    'value' => 1,
    'options' => []
])

<div class="space-y-1">
    @if($label)
        <label for="{{ $id }}" class="">
            {{ $label }}
        </label>
    @endif

    <select
        id="{{ $id }}"
        name="{{ $name }}"
        {{ $attributes->merge(['class' => '']) }}
    >
        @foreach($options as $val => $text)
            <option value="{{ $val }}" @selected(old($name, $value) == $val)>
                {{ $text }}
            </option>
        @endforeach
    </select>

    @error($name)
    <p class="">{{ $message }}</p>
    @enderror
</div>
