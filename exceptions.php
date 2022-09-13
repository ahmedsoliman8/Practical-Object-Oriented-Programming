<?php


class PaymentGatewayException extends Exception {

    protected $message='Payment failed';
}
class GatewayPaymentFailedException extends PaymentGatewayException {

    protected $message='Payment failed';
}

class InvalidGatewayTokenException extends PaymentGatewayException {
    protected $message='Invalid Token';

}

class PaymentGateway{

    public  function charge($token,$mount){

        //$payment=$this->service->charge($token,$mount);

        if (0){
            throw  new  InvalidGatewayTokenException;
        }

        if (0){
            throw  new  GatewayPaymentFailedException;
        }

    }
}

$gateway=new PaymentGateway();

try {
    $gateway->charge("kk",88);
    echo  "update subscription";
}


catch (PaymentGatewayException $e){

    die($e->getMessage());
} finally {
    die('finally');
}
