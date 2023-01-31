<?php

$xml =  new DOMDocument('1.0', 'UTF-8');
$xml-> formatOutput = true;

$xml_fac = $xml->createElement ('factura');

$cabecera = $xml->createAttribute('id');
$cabecera ->value = 'comprobante';

$cabecerav = $xml->createAttribute('version');
$cabecerav ->value = '1.00';

// Informacion tributaria
$xml_inf = $xml->createElement ('infoTributaria');
$xml_amb = $xml->createElement ('abiente', '1');
$xml_tip = $xml->createElement ('tipoEmision', '1');
$xml_raz = $xml->createElement ('razonSocial', 'Mi Empresa S.A');
$xml_nom = $xml->createElement ('nombreComercial', 'Mi Empresa S.A');
$xml_ruc = $xml->createElement ('ruc', '0909164691001');


$xml_cla = $xml->createElement ('claveAcceso', '49 digitos');
$xml_doc = $xml->createElement ('codDoc', '01');
$xml_est = $xml->createElement ('estab', '001');
$xml_emi = $xml->createElement ('ptoEmi', '001');
$xml_sec = $xml->createElement ('secuencial', '000000123');
$xml_dir = $xml->createElement ('dirMatriz', 'La 31 y el oro');

// Informacion de la Fctura    
$xml_def = $xml->createElement ('infoFactura');
$xml_fec = $xml->createElement ('fechaEmision','01/02/2023');
$xml_des = $xml->createElement ('dirEstablecimiento','La 31 y el oro');
$xml_obl = $xml->createElement ('obligadoContabilidad','NO');
$xml_ide = $xml->createElement ('tipoIdentificacionComprador','04'); // 04 Ruc 05 Cedula
$xml_rco = $xml->createElement ('razonSocialComprador','PINTAG PINTAG CARLOS EDUARDO');
$xml_idc = $xml->createElement ('identificacionComprador','0909164691001');
$xml_tsi = $xml->createElement ('totalSinImpuestos','1.00');
$xml_tds = $xml->createElement ('totalDescuento', '00');

// Total con Impuestos
$xml_imp = $xml->createElement ('totalConImpuestos');
$xml_tim = $xml->createElement ('totalImpuesto');
$xml_tco = $xml->createElement ('codigo', '2');
$xml_cpr = $xml->createElement ('codigoPorcentaje', '0');
$xml_bas = $xml->createElement ('baseImponible', '1.00');
$xml_val = $xml->createElement ('valor', '0.00');

//Propinas
$xml_pro = $xml->createElement ('propina', '0.00');
$xml_imt = $xml->createElement ('importeTotal', '1.00');
$xml_mon = $xml->createElement ('moneda', 'DOLAR');

//Pagos

$xml_pgs = $xml->createElement ('pagos');
$xml_pag = $xml->createElement ('pago');
$xml_fpa = $xml->createElement ('formaPago', '01'); // revisar en el sri la forma de pago de don carlos :v
$xml_tot = $xml->createElement ('total', '1.00');
$xml_pla = $xml->createElement ('plazo', '30');
$xml_uti = $xml->createElement ('unidadTiempo', 'dias');

//Detalles 
$xml_dts = $xml->createElement ('detalles');
$xml_dat = $xml->createElement ('detalle');
$xml_cop = $xml->createElement ('codigoPrincipal', 'pro 001');
$xml_cop = $xml->createElement ('descripcion', 'descripcion del producto');
$xml_can = $xml->createElement ('cantidad', '1');
$xml_pru = $xml->createElement ('precioUnitario', '1');
$xml_dsc = $xml->createElement ('descuento', '0');
$xml_tsm = $xml->createElement ('precioTotalSinImpuesto', '1.00');

//Impuestos
$xml_ips = $xml->createElement  ('impuestos');
$xml_ipt = $xml->createElement  ('impuesto');
$xml_cdg = $xml->createElement  ('codigo','2');
$xml_cdg = $xml->createElement  ('codigoPorcentaje','2');
$xml_cdg = $xml->createElement  ('tarifa','0.00');
$xml_cdg = $xml->createElement  ('baseImponible','1.00');
$xml_cdg = $xml->createElement  ('valor','0.00');

//Final
$xml_ifa = $xml->createElement  ('infoAdicional');
$xml_cpl = $xml->createElement  ('campoAdicional','brunomateoc7@gmail.com');
$atributo = $xml->createAttribute('nombre');
$atributo->value = 'email';

//Cerramos los Tags
$xml_inf->appendChild($xml_amb);
$xml_inf->appendChild($xml_tip);
$xml_inf->appendChild($xml_raz);
$xml_inf->appendChild($xml_nom);
$xml_inf->appendChild($xml_ruc);
$xml_inf->appendChild($xml_cla);
$xml_inf->appendChild($xml_doc);
$xml_inf->appendChild($xml_est);
$xml_inf->appendChild($xml_emi);
$xml_inf->appendChild($xml_sec);
$xml_inf->appendChild($xml_dir);

$xml_fac->appendChild($xml_inf);

$xml_def->appendChild($xml_fec);
$xml_def->appendChild($xml_des);
$xml_def->appendChild($xml_obl);
$xml_def->appendChild($xml_ide);
$xml_def->appendChild($xml_rco);
$xml_def->appendChild($xml_idc);
$xml_def->appendChild($xml_tsi);
$xml_def->appendChild($xml_fec);
$xml_def->appendChild($xml_tds);
$xml_def->appendChild($xml_imp);
$xml_def->appendChild($xml_tim);
$xml_def->appendChild($xml_tco);
$xml_def->appendChild($xml_bas);
$xml_def->appendChild($xml_val);

$xml_fac->appendChild($xml_def);

$xml_def->appendChild($xml_pro);
$xml_def->appendChild($xml_imt);
$xml_def->appendChild($xml_mon);
