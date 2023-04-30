<x-Dashboard-layout>
    <x-slot name="pageTitle">
        Services
    </x-slot>
    <x-slot name="pageTitle2">
        Create
    </x-slot>
    <div style="display: flex; justify-content: center;">
    <form style="width:65%" action="{{route('services.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('dashboard.Services._form')
    </form>
    </div>
    </x-Dashboard-layout>
