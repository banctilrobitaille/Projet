<?php

require_once('stripe-php-1.9.0/lib/Stripe.php');

$stripe = array(
    "secret_key" => "sk_test_wxEOZeO18PBoQwPr03vGsm5C",
    "publishable_key" => "pk_test_NHwJoLZVtKeZBUw8jrAG4d0k"
    );

Stripe::setApiKey($stripe['secret_key']);
?>