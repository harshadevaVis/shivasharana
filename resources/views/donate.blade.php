@extends('includes.main')
@section('pageSpecificContent')
    <section class="contact-section">

        <div data-scroll-index='1' class="make_donation_area section_padding">
            <div class="container">

                {{--<div class="row">--}}
                    {{--<div class="col-md-12 ">--}}
                        {{--<div class="donation_form row d-flex justify-content-center">--}}
                            {{--<div class="col-md-5 align-items-center">--}}
                                    {{--<div class="single_amount row">--}}
                                        {{--<div class="input_field col-md-12 ">--}}
                                            {{--<div style="text-align: center;" class="input-group ">--}}
                                                {{--<div class="input-group-prepend" style="text-align: left;">--}}
                                                    {{--<select form="form1" class="form-control" required id="currency" name="currency" style="text-align: left; -webkit-appearance: none;-moz-appearance: none;text-indent: 1px; text-overflow: '';" >--}}
                                                        {{--<option value="LKR"  selected>LKR &nbsp;</option>--}}
                                                        {{--<option value="LKR" >USD &nbsp;</option>--}}
                                                        {{--<option value="LKR" >GBP &nbsp;</option>--}}
                                                        {{--<option value="LKR" >EUR &nbsp;</option>--}}
                                                        {{--<option value="LKR" >AUD &nbsp;</option>--}}
                                                    {{--</select>--}}
                                                {{--</div>--}}
                                                {{--<input form="form1" id="amount" name="amount" type="number" required class="form-control" placeholder="0.00" aria-label="Username" aria-describedby="basic-addon1">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    {{--<form id="form1" method="POST" class="row" action="https://sandbox.payhere.lk/pay/checkout">--}}

                        {{--<input type="hidden" name="merchant_id" value="1213696">--}}
                        {{--<input type="hidden" name="return_url" value="{{route('donate')}}">--}}
                        {{--<input type="hidden" name="cancel_url" value="{{route('donate')}}">--}}
                        {{--<input type="hidden" name="notify_url" value="{{route('saveDonate')}}">--}}
                        {{--<input type="hidden" name="items" value="1ghg">--}}
                        {{--<input type="hidden" name="order_id" value="1">--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="form-group">--}}
                                {{--<input type="text" class="form-control" name="first_name" placeholder="First name">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="form-group">--}}
                                {{--<input type="text" class="form-control" name="last_name" placeholder="Las name"><br>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="form-group">--}}
                                {{--<input type="text" class="form-control" name="email" placeholder="Email (Required)">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="form-group">--}}
                                {{--<input type="text" class="form-control" name="phone" placeholder="Mobile No"><br>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="form-group">--}}
                                {{--<select class="form-control" name="country" >--}}
                                    {{--<option value=""  selected>Select Your Country</option>--}}
                                    {{--<option value="LKR" >LKR &nbsp;</option>--}}
                                    {{--<option value="LKR" >USD &nbsp;</option>--}}
                                    {{--<option value="LKR" >GBP &nbsp;</option>--}}
                                    {{--<option value="LKR" >EUR &nbsp;</option>--}}
                                    {{--<option value="LKR" >AUD &nbsp;</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="form-group">--}}
                                {{--<input type="text" class="form-control" name="city" placeholder="City name"><br>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="form-group">--}}
                                {{--<textarea type="text" class="form-control" name="address" placeholder="Address"></textarea>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</form>--}}



                    {{--<div class="row">--}}
                        {{--<div class="col-12">--}}
                            {{--<div class="donate_now_btn text-center">--}}
                                {{--<button onclick="submitDonate(this)"  class="boxed-btn4">Donate Now</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="7WJLNVD6FPRHU" />
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                        <img alt="" border="0" src="https://www.paypal.com/en_LK/i/scr/pixel.gif" width="1" height="1" />
                    </form>
                </div>
            </div>
        </div>

    </section>

@endsection
@section('pageSpecificScript')
    <script>
        $(document).ready(function(){

        });

        function submitDonate(el) {
            $(el).attr('disabled',true);
            var amount = $('#amount').val();
            var currency = $('#currency').val();
            if(amount && currency) {
                $('#form1').submit()
            }
            else{
                $('#amount').focus();
            }
            $(el).attr('disabled',false);

        }
    </script>
@endsection