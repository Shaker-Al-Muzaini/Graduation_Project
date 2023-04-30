<x-Dashboard-layout>
    <x-slot name="pageTitle">
        Dashboard
    </x-slot>
    <x-slot name="pageTitle2">
        Project
    </x-slot>
<x-alert/>

    <div class="container-fluid py-4">

        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3 d-flex justify-content-between">
                            <h6 class="text-white text-capitalize ps-3"> Research & Reports</h6>
                            <a href="{{route('project.create')}}" class="btn btn-sm btn-info mx-3">Create</a>
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <div class="mb-5 ps-3">

                        </div>

                        <div class="row">
                            @foreach($Projects as $Project)
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

                                <div class="card card-blog card-plain">
                                    <div class="card-header p-0 mt-n4 mx-3">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src="{{asset($Project->project_image_1)}}" alt="img-blur-shadow" width="220" height="250" class="img-fluid shadow border-radius-xl">
                                        </a>
                                    </div>
                                    <div class="card-body p-3">
                                        <p class="mb-0 text-sm">{{$Project->author_report}}</p>
                                        <a href="javascript:;">
                                            <h5>
                                                {{$Project->project_name}}
                                            </h5>
                                        </a>
                                        <p class="mb-4 text-sm">
                                            <img src="{{asset($Project->authors_photo)}}" alt="img-blur-shadow" width="50" height="80" class="img-fluid shadow border-radius-xl">
                                        </p>


                                        <div class="d-flex align-items-center justify-content-between">
                                            <a  href="{{$Project->report_file}}" class="btn btn-outline-info btn-sm mb-1">View Project</a>
                                            <a style="margin-top:10px" href="{{Route('project.edit',$Project->id)}}"   class="btn btn-sm btn-outline-warning">
                                                <i style="color: orange"  class="fas fa-edit"></i></a>
                                            <form action="{{Route('project.delete',$Project->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button style="margin-top:10px"  class="btn btn-sm btn-outline-danger "><i class="fas fa-trash"></i></button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            @endforeach
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
