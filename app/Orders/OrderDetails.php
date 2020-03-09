<?php


namespace App\Orders;


use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContract;

class OrderDetails {
    /**
     * @var BankPaymentGateway
     */
    private $paymentGateway;

    public function __construct(PaymentGatewayContract $paymentGateway) {

        $this->paymentGateway = $paymentGateway;
    }

    public function all() {
        $this->paymentGateway->setDiscount(50);
        return [
            'name'    => 'Vahid',
            'address' => 'Iran - Tehran',
        ];
    }
}
