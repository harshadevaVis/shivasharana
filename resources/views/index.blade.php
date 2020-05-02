@extends('includes.main')
@section('pageSpecificContent')

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2" style="background-image: url('{{\Illuminate\Support\Facades\URL::asset('my_assets/img/home/home (3).jpg')}}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text ">

                            <div id="homePageMainCarousel" class="carousel slide" data-ride="carousel" data-interval="7000"  data-pause="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <span>Make them smile!</span>
                                        <h5>“No one has ever become poor by giving.”</h5>

                                    </div>
                                    <div class="carousel-item">
                                        <span>Make them smile!</span>
                                        <h5>“Charity isn't about pity.It's about love.”</h5>

                                    </div>
                                    <div class="carousel-item">
                                        <span>Make them smile!</span>
                                        <h5>"Be the change you want to see in the world."</h5>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- reason_area_start  -->
    <div class="reson_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Reason of Helping</span></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="{{\Illuminate\Support\Facades\URL::asset('my_assets/img/home/eduCharity.jpg')}}" alt="">
                            </div>
                        </div>
                        <div style="height: 282px;" class="help_content">
                            <h4>Education Charities</h4>
                            <p style="height: 110px;" class="text-secondary">Poverty has become an important factor in whether or not they are successful in their studies...</p>
                            <a href="#" class="read_more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div  class="thum">
                            <div class="thum_1">
                                <img src="{{\Illuminate\Support\Facades\URL::asset('my_assets/img/home/healthCharity.jpg')}}" alt="">
                            </div>
                        </div>
                        <div style="height: 282px;" class="help_content">
                            <h4>Health Charities</h4>
                            <p style="height: 110px;" class="text-secondary">Charity is the act of extending love and kindness to others unconditionally...</p>
                            <a href="#" class="read_more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="{{\Illuminate\Support\Facades\URL::asset('my_assets/img/home/houseCharity.jpg')}}" alt="">
                            </div>
                        </div>
                        <div style="height: 282px;" class="help_content">
                            <h4>Build House</h4>
                            <p style="height: 110px;" class="text-secondary">It's estimated that no less than 150 million people, are homeless...</p>
                            <a href="#" class="read_more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- reason_area_end  -->

    <!-- latest_activites_area_start  -->

    <!-- latest_activites_area_end  -->

    {{--<!-- counter_area_start  -->--}}
    {{--<div class="counter_area">--}}
        {{--<div class="container">--}}
            {{--<div class="counter_bg overlay">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-lg-3 col-md-6">--}}
                        {{--<div class="single_counter d-flex align-items-center justify-content-center">--}}
                            {{--<div class="icon">--}}
                                {{--<i class="flaticon-calendar"></i>--}}
                            {{--</div>--}}
                            {{--<div class="events">--}}
                                {{--<h3 class="counter">120</h3>--}}
                                {{--<p>Finished Event</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-3 col-md-6">--}}
                        {{--<div class="single_counter d-flex align-items-center justify-content-center">--}}
                            {{--<div class="icon">--}}
                                {{--<i class="flaticon-heart-beat"></i>--}}
                            {{--</div>--}}
                            {{--<div class="events">--}}
                                {{--<h3 class="counter">120</h3>--}}
                                {{--<p>Finished Event</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-3 col-md-6">--}}
                        {{--<div class="single_counter d-flex align-items-center justify-content-center">--}}
                            {{--<div class="icon">--}}
                                {{--<i class="flaticon-in-love"></i>--}}
                            {{--</div>--}}
                            {{--<div class="events">--}}
                                {{--<h3 class="counter">120</h3>--}}
                                {{--<p>Finished Event</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-3 col-md-6">--}}
                        {{--<div class="single_counter d-flex align-items-center justify-content-center">--}}
                            {{--<div class="icon">--}}
                                {{--<i class="flaticon-hug"></i>--}}
                            {{--</div>--}}
                            {{--<div class="events">--}}
                                {{--<h3 class="counter">120</h3>--}}
                                {{--<p>Finished Event</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- counter_area_end  -->--}}

    <!-- our_volunteer_area_start  -->
    {{--<div class="our_volunteer_area section_padding">--}}
        {{--<div class="container">--}}
            {{--<div class="row justify-content-center">--}}
                {{--<div class="col-lg-6">--}}
                    {{--<div class="section_title text-center mb-55">--}}
                        {{--<h3><span>Our Volunteer</span></h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row justify-content-center">--}}
                {{--<div class="col-lg-4 col-md-6">--}}
                    {{--<div class="single_volenteer">--}}
                        {{--<div class="volenteer_thumb">--}}
                            {{--<img src="{{\Illuminate\Support\Facades\URL::asset('my_assets/img/volenteer/1.png')}}" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="voolenteer_info d-flex align-items-end">--}}
                            {{--<div class="social_links">--}}
                                {{--<ul>--}}
                                    {{--<li>--}}
                                        {{--<a href="#"> <i class="fa fa-facebook"></i> </a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#"> <i class="fa fa-pinterest"></i> </a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#"> <i class="fa fa-linkedin"></i> </a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#"> <i class="fa fa-twitter"></i> </a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="info_inner">--}}
                                {{--<h4>Sakil khan</h4>--}}
                                {{--<p>Donner</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-6">--}}
                    {{--<div class="single_volenteer">--}}
                        {{--<div class="volenteer_thumb">--}}
                            {{--<img src="{{\Illuminate\Support\Facades\URL::asset('my_assets/img/volenteer/2.png')}}" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="voolenteer_info d-flex align-items-end">--}}
                            {{--<div class="social_links">--}}
                                {{--<ul>--}}
                                    {{--<li>--}}
                                        {{--<a href="#"> <i class="fa fa-facebook"></i> </a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#"> <i class="fa fa-pinterest"></i> </a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#"> <i class="fa fa-linkedin"></i> </a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#"> <i class="fa fa-twitter"></i> </a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="info_inner">--}}
                                {{--<h4>Emran Ahmed</h4>--}}
                                {{--<p>Volunteer</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-6">--}}
                    {{--<div class="single_volenteer">--}}
                        {{--<div class="volenteer_thumb">--}}
                            {{--<img src="{{\Illuminate\Support\Facades\URL::asset('my_assets/img/volenteer/3.png')}}" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="voolenteer_info d-flex align-items-end">--}}
                            {{--<div class="social_links">--}}
                                {{--<ul>--}}
                                    {{--<li>--}}
                                        {{--<a href="#"> <i class="fa fa-facebook"></i> </a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#"> <i class="fa fa-pinterest"></i> </a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#"> <i class="fa fa-linkedin"></i> </a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#"> <i class="fa fa-twitter"></i> </a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="info_inner">--}}
                                {{--<h4>Sabbir Ahmed</h4>--}}
                                {{--<p>Volunteer</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- our_volunteer_area_end  -->


    <div data-scroll-index='1' class="make_donation_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Make a Donation</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="donate_now_btn text-center">
                        <a href="{{route('donate')}}" class="boxed-btn4">Donate Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('pageSpecificScript')
    <script>
        $(document).ready(function(){

        });
    </script>
@endsection