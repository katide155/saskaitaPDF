<?php

// Composer's auto-loading functionality
require "vendor/autoload.php";

use Dompdf\Dompdf;

$html = file_get_contents(__DIR__ . '/vendor/dompdf/isankstine.htm');
$public = __DIR__;

//generate some PDFs!
$dompdf = new DOMPDF();  //if you use namespaces you may use new \DOMPDF()
$dompdf->getOptions()->setChroot($public);
//print $html;

$dompdf->loadHtml($html);


$dompdf->render();

$dompdf->stream("isankstine_saskaita.pdf", array("Attachment"=>0));