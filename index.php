<?php

require 'vendor/autoload.php';
$api = new Binance\API("khIlwP8nFIHdySoLeRR1uPjBGvP1LyWfSEo4pio307oc7FhgipVdmsFzw4OIb57V","AwmjVWVJgXa2TpgrWLDUUaxngM1AEIWPXJSGO9LmBPI45ZokIVyRki1Zze4fMHAr");
$balance_update = function($api, $balances) {
	echo "Balance update".PHP_EOL;
	print_r($balances);
};

$order_update = function($api, $report) {
	echo "Order update".PHP_EOL;
	echo $report['symbol'];
	$price = $report['price'];
	$quantity = $report['quantity'];
	$symbol = $report['symbol'];
	$side = $report['side'];
	$orderType = $report['orderType'];
	$orderId = $report['orderId'];
	$orderStatus = $report['orderStatus'];
	$executionType = $report['orderStatus'];
	if ( $executionType == "NEW" ) {
		if ( $executionType == "REJECTED" ) {
			echo "Order Failed! Reason: {$report['rejectReason']}".PHP_EOL;
		}
		echo "{$symbol} {$side} {$orderType} ORDER #{$orderId} ({$orderStatus})".PHP_EOL;
		echo "..price: {$price}, quantity: {$quantity}".PHP_EOL;
		return;
	}
	//NEW, CANCELED, REPLACED, REJECTED, TRADE, EXPIRED
	echo "{$symbol} {$side} {$executionType} {$orderType} ORDER #{$orderId}".PHP_EOL;
};
$api->userData($balance_update, $order_update);
//
 ?>
