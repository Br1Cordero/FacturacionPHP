<?php

$url = 'http://ejemplo.com/servicio.wsdl'; // URL del archivo WSDL
$archivo_local = 'servicio.wsdl'; // nombre del archivo local donde se guardará el WSDL

$wsdl = file_get_contents($url); // descargar el contenido del archivo WSDL

file_put_contents($archivo_local, $wsdl); // guardar el contenido del archivo WSDL en un archivo local
