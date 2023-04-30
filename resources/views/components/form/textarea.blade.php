@props([
       'name','value' ,'label'=>false
])
@if($label)
    <label for="" style="font-weight: bold ;Margin-Bottom:0rem;
Margin-Top: 2rem;color:#444444">{{$label}}</label>
@endif
<textarea
    style="background-color:#ffffff;color:black;Border: 1px Solid #cfcfcf;padding:14px;text-transform:capitalize"
    name="{{$name}}"
    {{$attributes->class([
        'form-control',
        'is-invalid'=> $errors->has($name)
    ])}}
    >{{old ($name,$value)}}
</textarea>
<x-form.error :name="$name" />
