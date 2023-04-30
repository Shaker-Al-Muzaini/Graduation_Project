<x-Dashboard-layout>
    <x-slot name="pageTitle">
        Dashboard
    </x-slot>
    <x-slot name="pageTitle2">
        Team
    </x-slot>
<x-alert/>
    <a href="{{route('team.create')}}" class="btn btn-sm btn-info mx-3">Create</a>

    <div class="container">
        <div class="row">
            @foreach($Teams as $Team)
                <div class="col-12 col-xl-4">
                    <div class="card card-plain h-100">

                        <div class="card-body p-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                    <div class="avatar me-3">
                                        <img src="{{asset($Team->team_img)}}" alt="kal" class="border-radius-lg shadow">
                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$Team->team_title}}.</h6>
                                        <p class="mb-0 text-xs">{{$Team->team_description}}..</p>

                                    </div>
                                    <a class="btn pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" style="color: #4caf50" href="{{Route('team.edit',$Team->id)}}">
                                        Edit <span>
                                            <form action="{{Route('team.delete',$Team->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button  class="btn btn-link  pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto">delete</button>
                                            </form></span>
                                    </a>


                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                @if(($loop->iteration) % 3 == 0)
        </div>
        <br>
        <div class="row">
            @endif
            @endforeach
    <div class="container-fluid py-4">

    </div>
    </div>
    </div>


{{--{{$categories->withQueryString()->appends(['search'=>1])->links()}}--}}
</x-Dashboard-layout>
