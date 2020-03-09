<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use App\Orders\OrderDetails;

class PayOrderController extends Controller {
    public function store(PaymentGateway $paymentGateway, OrderDetails $orderDetails) {
        $order = $orderDetails->all();
        dd($paymentGateway->charge(25000));
    }
}
