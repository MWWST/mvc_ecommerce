<?php
require_once('./assets/lib/Stripe.php');

$stripe = array(
  'secret_key'      => getenv('secret_key'),
  'publishable_key' => getenv('publishable_key')
);

Stripe::setApiKey($stripe['secret_key']);
?>