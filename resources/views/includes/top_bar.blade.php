<!-- header-start -->
<header>
    <div class="header-area ">
        <div class="header-top_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-lg-10 ">
                        <div class="short_contact_list">
                            <ul>
                                <li><a href="tel:+94701213785"> <i class="fa fa-phone"></i> (+94) 70 121-3785</a></li>
                                <li><a  href = "mailto: sadanandterdal@gmail.com"> <i class="fa fa-envelope"></i>sadanandterdal@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="social_media_links d-none d-lg-block">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest-p"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-5 ">
                        <div class="logo">
                            <a href="{{route('welcome')}}">
                                <img src="{{\Illuminate\Support\Facades\URL::asset('my_assets/img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="main-menu">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{route('welcome')}}">home</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                    @if(\Illuminate\Support\Facades\Auth::check())
                                        <li><a href="{{route('adminPaymentsView')}}">My Account</a></li>
                                    @else
                                        <li><a href="{{route('login')}}">Login</a></li>
                                    @endif
                                </ul>
                            </nav>
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a  href="{{route('donate')}}">Make a Donate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
