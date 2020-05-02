@extends('administrator.includes.main')
@section('pageSpecificContent')

        <div class="container mb-5 mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <div class="row">

                                    <form action="" class="col-md-12" method="GET" id="form1">

                                        <input type="hidden" id="rows" name="rows" />
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="name" class="form-label">Name</label>
                                                <input class="form-control" autocomplete="off" type="text" placeholder="Search name here" name="name"  id="name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Date Range</label>
                                                <div>
                                                    <div class="input-daterange input-group" id="date-range">
                                                        <input onchange="strDateRangeChange(this)" type="text" autocomplete="off" class="form-control datetimepicker" value=""  id="str" name="str" />
                                                        <input onchange="endDateRangeChange(this)" type="text" autocomplete="off" class="form-control datetimepicker" value=""  id="end" name="end" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2 form-group mt-4 pt-1">
                                                <button class="btn btn-primary btn-block" type="submit"> Search</button>
                                            </div>

                                        </div>

                                    </form>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">PAYMENT ID</th>
                                            <th scope="col">NAME</th>
                                            <th scope="col"  style="text-align: right">AMOUNT</th>
                                            <th scope="col" >EMAIL</th>
                                            <th scope="col" >STATUS</th>
                                            <th scope="col" >ADDRESS</th>
                                            <th scope="col" >PAID AT</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($payments)
                                            @foreach($payments as $payment)
                                                <tr>
                                                    <td>{{sprintf('%06d',$payment->idpayment)}}</td>
                                                    <td>{{$payment->fName}} {{$payment->lName}}</td>
                                                    <td style="text-align: right">Rs.{{number_format($payment->amount,2)}}</td>
                                                    <td>{{$payment->email}}</td>
                                                    <td>
                                                        @if($payment->isHide == 1)
                                                                <i class="fa fa-circle text-danger"></i> Hide
                                                        @else
                                                                <i class="fa fa-circle text-success"></i> Show
                                                        @endif
                                                    </td>
                                                    <td>{{$payment->address}}</td>
                                                    <td>{{$payment->created_at}}</td>

                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row pull-right">
                                <div class="col-md-12">
                                    @if(isset($payments))
                                        {{$payments->links()}}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('pageSpecificScript')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
    <script>
        $(document).ready(function(){
            $(document).ready(function(){
                $('.datetimepicker').datepicker({
                    todayBtn: 'linked',
                    format: 'yyyy-mm-dd',
                    autoclose: true
                });

            });
        });

        function strDateRangeChange(el) {
            var value = el.value;
            var end =  $('#end');
            if(end.val() == ''){
                end.val(value);
            }
        }

        function endDateRangeChange(el) {
            var value = el.value;
            var end =  $('#str');
            if(end.val() == ''){
                end.val(value);
            }
        }
    </script>
@endsection