<?php

 function FirmarDoccumentXml($srcXml,$clave){

    $xml = file_get_contents($srcXml);

    $p12 = file_get_contents('Firma.p12');
    $certs = array();
    openssl_pkcs12_read($p12, $certs, 'PintagP2023');

    $privateKey = $certs['pkey'];
    $publicKey = $certs['cert'];

    $signature = '';
    openssl_sign($xml, $signature, $privateKey, OPENSSL_ALGO_SHA256);

    $signedXml = $xml . '<signature>' . base64_encode($signature) . '</signature>';
    $folder = 'Documents/Firmados';
    
    $file = $folder . '/'.$clave.'.xml';
    file_put_contents($file, $signedXml);
 }
?>