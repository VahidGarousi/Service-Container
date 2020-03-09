<?php


namespace App\Orders;


use App\Billing\PaymentGateway;

class OrderDetails {
    /**
     * @var PaymentGateway
     */
    private $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway) {

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
