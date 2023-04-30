@props([
        'name','label','checked'=>false
])
@php
    $options = [
        'option1' => 'Option 1',

    ];
@endphp

@foreach($options as $value=>$text)
    <div class="form-check">
        <input type="radio" name="{{$name}}"  value={{$value}}
        @checked(old($name,$checked)==$value)
        {{$attributes->class([
            'form-check-input',
            'is-invalid'=> $errors->has($name)
        ])}}>

        <label class="form-check-label">
            {{$text}}
        </label>
    </div>
@endforeach
<x-form.error :name="$name" />
