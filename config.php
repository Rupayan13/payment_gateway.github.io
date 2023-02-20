<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51Mc9giSCD808ZUbgJYKz2UfhhJcIazbdKxXCtrN1iB9sB8cXCHmupKeZX2m8qzVoIhGVBFMkMMQqWeuWR9isqPtI00GGT2lxQ5";
$secretKey="sk_test_51Mc9giSCD808ZUbgTb9Yq06yxZW7PjZBftUTih1CnWIkzJZlvwB78oUGgm2orG0pTYvw5Th3HOcCeAVkvKaJNeGQ00KzztlnTT";

\Stripe\Stripe::setApiKey($secretKey);

?>