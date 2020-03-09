<?php

namespace App\Billing;

interface PaymentGatewayContract {
    public function charge($amount);

    public function setDiscount($amount);
}
