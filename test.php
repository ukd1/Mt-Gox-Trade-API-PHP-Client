<?php
require_once 'mtgox.php';

$m = new mtgox('username', 'password');

/*
print_r($m->balance());
print_r($m->ticker());
print_r($m->depth());
print_r($m->trades());
*/

//print_r($m->sell(1, 11));


exit();


// The following code will cancel ALL your orders
$orders = $m->orders();
print_r($orders);

foreach ($orders as $order)
{
	print_r($order->cancel());
}
