<x-Dashboard-layout>
    <x-slot name="pageTitle">
        Courses
    </x-slot>
    <x-slot name="pageTitle2">
        Edit
    </x-slot>
    {{--        success message--}}
    <x-alert/>
    <div style="display: flex; justify-content: center;">
<form style="width:65%" action="{{route('courses.update',$courses->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('dashboard.courses._form',[
        'button_label'=>'Update'
])
    </form>
    </div>
</x-Dashboard-layout>

