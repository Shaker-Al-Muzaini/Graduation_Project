@props([
        'type'=>'text','name','value'=>'','label'=>false
])
@if($label)
    <label for="" style="font-weight: bold ;Margin-Bottom:0rem;
Margin-Top: 2rem;color:#444444">{{$label}}</label>
@endif
<input
  style="background-color:#ffffff;color:black;Border: 1px Solid #cfcfcf;padding:14px;margin-right: 10px;text-transform:capitalize"
    type="{{$type}}"
    name="{{$name}}"
    value="{{old($name,$value)}}"
    {{$attributes->class([
        'form-control',
        'is-invalid'=> $errors->has($name)
])}}>
<x-form.error :name="$name" />
