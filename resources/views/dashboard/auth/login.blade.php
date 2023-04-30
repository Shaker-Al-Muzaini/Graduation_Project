<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <title>
       {{config('app.name')}} | {{__('Login')}}
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('assets/css/material-dashboard.css?v=3.0.5')}}" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="bg-gray-200">
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <!-- Navbar -->

            <!-- End Navbar -->
        </div>
    </div>
</div>
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100"
         style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-info shadow-info border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>

                            </div>
                        </div>
                        <div class="card-body">

                            <form role="form" class="text-start" action="{{route('login')}}" method="post">
                                @csrf
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                @error('email')
                                <p class="text-info">{{$message}}</p>
                                @enderror
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                @error(config('password'))
                                <p class="text-info">{{$message}}</p>
                                @enderror
                                <div class="form-check form-switch d-flex align-items-center mb-3">
                                    <input name="remember" class="form-check-input" type="checkbox" id="rememberMe" checked>
                                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Sign in</button>
                                </div>
                                <p class="mt-4 text-sm text-center">
                                    Don't have an account?
                                    <a href="{{route('register')}}" class="text-info text-gradient font-weight-bold">Sign up</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer position-absolute bottom-2 py-2 w-100">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-12 col-md-6 my-auto">
                    </div>

                </div>
            </div>
        </footer>
    </div>
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
