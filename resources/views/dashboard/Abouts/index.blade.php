<x-Dashboard-layout>
    <x-slot name="pageTitle">
        Dashboard
    </x-slot>
    <x-slot name="pageTitle2">
        About
    </x-slot>
<x-alert/>
    <div class="d-flex justify-content-center">
        <div class="col-md-8 mx-auto">
            <div class="card card-plain h-100">
                @foreach($Abouts as $About)
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">About Title</h6>
                            </div>
                            <div class="col-md-4 text-end">
                                <a  href="{{Route('about.edit',$About->id)}}">
                                    <i class="fas fa-user-edit text-success text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <p class="text-sm">
                            {{$About->about}}
                        </p>

                    </div>
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">About Our Mission</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <p class="text-sm">
                            {{$About->our_mission}}
                        </p>
                        <hr class="horizontal gray-light my-4">
                    </div>
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">About Our Vision</h6>
                            </div>

                        </div>
                    </div>
                    <div class="card-body p-3">
                        <p class="text-sm">
                            {{$About->our_vision}}
                        </p>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
        <div class="container">
        <div class="row">
    <div class="container-fluid py-4">
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
    </div>
    </div>




{{--{{$categories->withQueryString()->appends(['search'=>1])->links()}}--}}
</x-Dashboard-layout>
