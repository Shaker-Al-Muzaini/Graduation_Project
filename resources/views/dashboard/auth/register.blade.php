<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <title>
        {{config('app.name')}} | {{__('Register')}}
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}"rel="stylesheet" />
    <link href="{{asset('assets/css/nucleo-svg.css')}}"rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('assets/css/material-dashboard.css?v=3.0.5')}}"rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="">
<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-info h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('{{asset('assets/img/illustrations/illustration-signup.jpg')}}'); background-size: cover;">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                        <div class="card card-plain">
                            <div class="card-header">
                                <h4 class="font-weight-bolder">Sign Up</h4>
                                <p class="mb-0">Enter your email and password to register</p>
                            </div>
                            <div class="card-body">
                                <form role="form" action="{{route('register')}}" method="post">
                                    @csrf
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control">
                                    </div>
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Email</label>
                                        <input name="email" type="email" class="form-control">
                                    </div>
                                    @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password"  name="password" class="form-control">
                                    </div>
                                    @error('password')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password"  name="password_confirmation" class="form-control">
                                    </div>
                                    @error('password_confirmation')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg bg-gradient-info btn-lg w-100 mt-4 mb-0">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-2 text-sm mx-auto">
                                    Already have an account?
                                    <a href="{{route('login')}}"class="text-info text-gradient font-weight-bold">Sign in</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/material-dashboard.min.js?v=3.0.5')}}"></script>
</body>

</html>
