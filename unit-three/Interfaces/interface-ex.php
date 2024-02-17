<?php


interface PaymentGateway{
    public function processPayment($amount);
    public function refundPayment($trasactionId);
}

class PayPalPayment implements PaymentGateway{
    
    public function processPayment($amount){
        echo "Processing a payment of $amount via PayPal. <br>";
    }

    public function refundPayment($transactionId){
        echo "Refunding payment with transaction Id $transactionId via PayPal.";
    }
}

$test = new PayPalPayment();
$test->processPayment(100);
$test->refundPayment(100);

/* 
PHP - Interfaces vs. Abstract Classes:

 -> Interface are similar to abstract classes. The difference between interfaces and 
    abstract classes are:

    - Interfaces cannot have properties, while abstract classes can.

    - All interface methods must be public, while abstract class methods is public 
      or protected.

    - All methods in an interface are abstract, so they cannot be implemented in 
      code and the abstract keyword is not necessary.
      
    - Classes can implement an interface while inheriting from another class at the 
      same time.



*/