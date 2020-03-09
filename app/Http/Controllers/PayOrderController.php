<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;

class PayOrderController extends Controller {
    public function store(PaymentGateway $paymentGateway) {
        dd($paymentGateway->charge(25000));
    }
}
