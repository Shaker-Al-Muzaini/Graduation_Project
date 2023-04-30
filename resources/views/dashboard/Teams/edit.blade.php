<x-Dashboard-layout>
    <x-slot name="pageTitle">
        Teams
    </x-slot>
    <x-slot name="pageTitle2">
        Edit
    </x-slot>
    {{--        success message--}}
    <x-alert/>
    <div style="display: flex; justify-content: center;">
<form style="width:65%" action="{{route('team.update',$teams->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('dashboard.Teams._form',[
        'button_label'=>'Update'
])
    </form>
    </div>
</x-Dashboard-layout>

