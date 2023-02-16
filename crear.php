<?php

$p12 = file_get_contents('Firma.p12');
$certs = array();
openssl_pkcs12_read($p12, $certs, 'PintagP2023');

$privateKey = $certs['pkey'];
$publicKey = $certs['cert'];

file_put_contents('private.key', $privateKey);
file_put_contents('public.crt', $publicKey);

echo $privateKey.'</br>'.$publicKey
?>
