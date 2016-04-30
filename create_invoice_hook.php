<?php

// require_once 'vendor/autoload.php';
require_once __DIR__.'/vendor/autoload.php';

// init Podio
define("CLIENT_ID", "brisen-podio");
define("CLIENT_SECRET", "j0MW9wcsJ6ZeWGK3snnYIvsGOd8Y9oQwI12dfikCwj74uCUVyhy4jgFI5v4FUJVM");
define("APP_ID", "15688604");
define("APP_TOKEN", "7719f0975bd84b569a07a521553b6466");

Podio::set_debug(false);
Podio::setup(CLIENT_ID, CLIENT_SECRET);
Podio::authenticate_with_app(APP_ID, APP_TOKEN);


// init DOMPDF
define('DOMPDF_ENABLE_AUTOLOAD', false);
require_once 'vendor/dompdf/dompdf/dompdf_config.inc.php';


// init error handling
error_reporting(E_ALL);
// ini_set('display_errors', '1');


// start executing...


$item_id = 413769483;
$item = PodioItem::get($item_id);
// print_r($item);

$fields = array(
    $item->fields["title"]->values,
    $item->fields["fakturatext"]->values,
    // $item->fields["mottagare"]->values,
    $item->fields["belopp"]->values,
);
var_export($fields);


// $dompdf = new DOMPDF();
// $dompdf->load_html(file_get_contents("templates/invoice.html"));

// $dompdf->set_paper('A4', 'portrait');

// $dompdf->render();

// // Output the generated PDF to Browser
// // $dompdf->stream();

// file_put_contents("invoice.pdf", $dompdf->output());

/*
Examples and tutorials here:

http://pxd.me/dompdf/www/examples.php
http://www.sitepoint.com/convert-html-to-pdf-with-dompdf/
https://github.com/dompdf/dompdf
*/
