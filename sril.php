<?php
$objClienteSOAP = new soapclient('https://celcer.sri.gob.ec/comprobantes-electronicos-ws/RecepcionComprobantes?wsdl');
$xmlComprobante = file_get_contents("3101201801019041192300110010010000000021234567810.xml");
$comprobante = base64_encode($xmlComprobante);
$params = new stdClass();
$params->xml = $comprobante;
$resul = new stdClass();
$result = $RecepcionComprobante->validarComprobante($params);
