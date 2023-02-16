<?php

$parametros = array(
    "config" =>"openssl.cnf",
    "private_key_bits" => 2480,
    "default_md" => "sha256",
);

$generar = openssl_pkey_new($parametros);

openssl_pkey_export($generar, $key_priveate, NULL, $parametros);
$key_public = openssl_pkey_get_details($generar);

file_put_contents('private.key', $key_priveate);
file_put_contents('public.key', $key_public['key']);