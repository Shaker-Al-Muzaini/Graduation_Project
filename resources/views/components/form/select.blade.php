@props([
    'name', 'id', 'options', 'label' => '', 'value' => ''
])

@if($label)
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
@endif

<select name="{{ $name }}"

        id="{{ $id }}"
    {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)]) }}
>
    <option value=""></option>
    @foreach($options as $v => $text)
        <option value="{{ $v }}" @selected($v == old($name, $value))>{{ $text }}</option>
    @endforeach
</select>

<x-form.error :name="$name" />
