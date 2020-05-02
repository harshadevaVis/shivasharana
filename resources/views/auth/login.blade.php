<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{isset($title) ? $title : ''}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{\Illuminate\Support\Facades\URL::asset('my_assets/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('my_assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('my_assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('my_assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('my_assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('my_assets/css/themify-icons.css')}}">
    {{--<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('my_assets/css/nice-select.css')}}'">--}}
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('my_assets/css/flaticon.cs')}}s">
    {{--<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('my_assets/css/gijgo.css')}}'">--}}
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('my_assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('my_assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('my_assets/css/style.css')}}">

    <!-- owl carousel css -->
{{--<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('my_assets/OwlCarousel2/dist/assets/owl.carousel.min.css')}}">--}}
{{--<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('my_assets/OwlCarousel2/dist/assets/owl.theme.default.min.css')}}">--}}
<!-- owl carousel css end -->
    <style>
        .footer {
            background-color: #0ea689;
        }
    </style>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body  style="background-color: rgba(139,225,176,0.76)">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->



<div class="container " style="margin-top: 10%;" >
    <div class="row justify-content-center">
        <div class="col-md-8" >
            <div class="card" style="background-color: rgba(103,210,160,0.76)">
                <div class="card-header text-center text-white" style="font-size: 40px;">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label style="font-size: 20px;" for="email" class="col-md-4 text-white col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="font-size: 20px;" for="password" class="col-md-4 text-white col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<div class="form-check">--}}
                                    {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                                    {{--<label class="form-check-label" for="remember">--}}
                                        {{--{{ __('Remember Me') }}--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Login') }}
                                </button>

                                {{--@if (Route::has('password.request'))--}}
                                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                        {{--{{ __('Forgot Your Password?') }}--}}
                                    {{--</a>--}}
                                {{--@endif--}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- link that opens popup -->

<!-- JS here -->
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/popper.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/bootstrap.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/owl.carousel.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/ajax-form.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/waypoints.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/scrollIt.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/wow.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/nice-select.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/jquery.slicknav.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/plugins.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/gijgo.min.js')}}"></script>
<!--contact js-->
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/contact.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/jquery.form.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/jquery.validate.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/mail-script.js')}}"></script>

<script src="{{\Illuminate\Support\Facades\URL::asset('my_assets/js/main.js')}}"></script>

</body>

</html>

