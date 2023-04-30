<x-Dashboard-layout>
    <x-slot name="pageTitle">
        Dashboard
    </x-slot>
    <x-slot name="pageTitle2">
        Services
    </x-slot>
<x-alert/>

    <div class="container-fluid py-4">

        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3 d-flex justify-content-between">
                            <h6 class="text-white text-capitalize ps-3">Services table</h6>
                            <a href="{{route('services.create')}}" class="btn btn-sm btn-info mx-3">Create</a>
                        </div>
                    </div>

                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Services Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Services Owners Name </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">price</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> creation date</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{asset($service->services_image)}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user6">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $service->services_name }}</h6>
{{--                                                    <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>--}}
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{asset($service->services_owner_image)}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user6">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $service->services_owner_name }}</h6>
                                                    {{--                                                    <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>--}}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $service->price}}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $service->created_at->format('Y-m-d')}}</span>
                                        </td>

                                        <td class="align-middle">
                                            <a href="{{Route('services.edit',$service->id)}}"   class="btn btn-sm btn-outline-warning"><i style="color: orange"  class="fas fa-edit"></i></a>

                                        </td>
                                        <td class="align-middle">
                                            <form action="{{Route('services.delete',$service->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-sm btn-outline-danger "><i class="fas fa-trash"></i></button>
                                            </form>

                                        </td>
{{--                                        <td class="align-middle">--}}
{{--                                            <a href="#" class="text-secondary font-weight-bold text-xs edit-service" data-id="{{$service->id }}" data-toggle="modal" data-target="#edit-service-modal">--}}
{{--                                                Edit--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <footer class="footer py-4  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>



{{--{{$categories->withQueryString()->appends(['search'=>1])->links()}}--}}
</x-Dashboard-layout>
