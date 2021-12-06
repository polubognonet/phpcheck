<?php

require 'vendor/autoload.php';
$api = new Binance\API("khIlwP8nFIHdySoLeRR1uPjBGvP1LyWfSEo4pio307oc7FhgipVdmsFzw4OIb57V","AwmjVWVJgXa2TpgrWLDUUaxngM1AEIWPXJSGO9LmBPI45ZokIVyRki1Zze4fMHAr");
$quantity = 0.09;
$price = 180;
$order = $api->buy("SOLBUSD", $quantity, $price);
print_r($order);


 ?>
