<x-Dashboard-layout>
    <x-slot name="pageTitle">
        Dashboard
    </x-slot>
    <x-slot name="pageTitle2">
        Footer
    </x-slot>
<x-alert/>
    <div class="d-flex justify-content-center">
    <div class="col-lg-4 col-md-6 ">
        <div class="card h-100">
            @foreach($Footers as $Footer)
            <div class="card-header pb-0">
                <h6>Footers overview</h6>
                <a href="{{Route('footer.edit',$Footer->id)}}" style="float:right; padding:5px;">
                    <i class="fas fa-user-edit text-success text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                </a>

            </div>
            <div class="card-body p-3">
                <div class="timeline timeline-one-side">
                    <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-success text-gradient">notifications</i>
                  </span>
                        <div class="timeline-content">
                            <h6 class="text-dark text-sm font-weight-bold mb-0">Address</h6>
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$Footer->address}}</p>
                        </div>
                    </div>
                    <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-danger text-gradient">code</i>
                  </span>
                        <div class="timeline-content">
                            <h6 class="text-dark text-sm font-weight-bold mb-0">Phone</h6>
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$Footer->phone}}</p>
                        </div>
                    </div>
                    <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-info text-gradient">shopping_cart</i>
                  </span>
                        <div class="timeline-content">
                            <h6 class="text-dark text-sm font-weight-bold mb-0">Email</h6>
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$Footer->email}}</p>
                        </div>
                    </div>
                    <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-warning text-gradient">credit_card</i>
                  </span>
                        <div class="timeline-content">
                            <h6 class="text-dark text-sm font-weight-bold mb-0">Facebook URL</h6>
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"></p>{{$Footer->facebook_url}}
                        </div>
                    </div>
                    <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-info text-gradient">shopping_cart</i>
                  </span>
                        <div class="timeline-content">
                            <h6 class="text-dark text-sm font-weight-bold mb-0">Instagram URL</h6>
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$Footer->instagram_url}}</p>
                        </div>
                    </div>
                    <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-info text-gradient">credit_card</i>
                  </span>
                        <div class="timeline-content">
                            <h6 class="text-dark text-sm font-weight-bold mb-0">Twitter URL</h6>
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$Footer->twitter_url}}</p>
                        </div>
                    </div>
                    <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-info text-gradient">key</i>
                  </span>
                        <div class="timeline-content">
                            <h6 class="text-dark text-sm font-weight-bold mb-0">Youtube URL</h6>
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$Footer->youtube_url}}</p>
                        </div>
                    </div>

                    <div class="timeline-block">
                  <span class="timeline-step">
                    <i class="material-icons text-dark text-gradient">payments</i>
                  </span>
                        <div class="timeline-content">
                            <h6 class="text-dark text-sm font-weight-bold mb-0">Linkedin URL</h6>
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$Footer->linkedin_url}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>

        <div class="container" >
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
