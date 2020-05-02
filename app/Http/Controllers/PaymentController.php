<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function adminPaymentsView(Request $request){

        $query =  Payment::query();
        if($request['name'] !=  null){
            $query = $query->where('fName', 'like', '%' . $request['name'] . '%')->orWhere('lName', 'like', '%' . $request['name'] . '%');
        }
        if (!empty($request['end']) && !empty($request['str'])) {
            $startDate = date('Y-m-d', strtotime($request['str']));
            $endDate = date('Y-m-d', strtotime($request['end'].' +1 day'));
            $query = $query->whereBetween('created_at', [$startDate, $endDate]);
        }
        $payments = $query->paginate(20);
        $payments->appends(array(
            'name' => $request['name'],
            'str' => $request['str'],
            'end' => $request['end']
        ));

        return view('administrator.paymentsView',['payments'=>$payments,'title'=>'Admin | livebloodbank.lk']);
    }

    public function saveDonate(Request $request){
        $merchant_id         = $request['merchant_id'];
        $order_id             = $request['order_id'];
        $payhere_amount     = $request['payhere_amount'];
        $payhere_currency    = $request['payhere_currency'];
        $status_code         = $request['status_code'];
    }
}
