<?php

$wsdl = "https://cel.sri.gob.ec/comprobantes-electronicos-ws/RecepcionComprobantes?wsdl";

$client = new SoapClient($wsdl_url);
$options = array(
    'connection_timeout' => 60,
    'ssl' => array(
        'verify_peer' => true,
        'verify_peer_name' => true
    )
);

$client = new SoapClient($wsdl_url, $options);


var_dump($result);