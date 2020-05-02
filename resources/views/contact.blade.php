@extends('includes.main')
@section('pageSpecificContent')

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">

    
                <div class="row">

                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-md-12">
                        @if($errors->any())
                            <div class="text-danger">{{ implode('', $errors->all(':message')) }}</div>
                        @endif
                            @if(session()->has('success'))
                                <div class="alert alert-success col-md-8">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                    </div>
                    <div class="col-lg-7">
                        <form class="form-contact contact_form" action="{{route('sendEmail')}}" method="GET" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>VVD Global Holdings (Pvt) Ltd.</h3>
                                <p>No:24, Police park avenue, Colombo 05, Srilanka</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+94 72 337 4789</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>sadanandterdal@gmail.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->

@endsection
