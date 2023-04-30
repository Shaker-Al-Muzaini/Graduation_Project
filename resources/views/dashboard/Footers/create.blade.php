<x-Dashboard-layout>
    <x-slot name="pageTitle">
        About
    </x-slot>
    <x-slot name="pageTitle2">
        Create
    </x-slot>
    <div style="display: flex; justify-content: center;">
    <form style="width:65%" action="{{route('footer.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('dashboard.Footers._form')
    </form>
    </div>
    </x-Dashboard-layout>
