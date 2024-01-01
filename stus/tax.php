<?php

require_once 'vendor/autoload.php';

use Salla\ZATCA\GenerateQrCode;
use Salla\ZATCA\Tags\InvoiceDate;
use Salla\ZATCA\Tags\InvoiceTaxAmount;
use Salla\ZATCA\Tags\InvoiceTotalAmount;
use Salla\ZATCA\Tags\Seller;
use Salla\ZATCA\Tags\TaxNumber;



$seller_name= "Salla";
$seller_tax="1234567891";
$invoice_date = "2021-07-12T14:25:09Z";
$invoice_amount= "100.00";
$invoice_tax_amount = "15.00";

// data:image/png;base64, .........
$displayQRCodeAsBase64 = GenerateQrCode::fromArray([
    new Seller($seller_name), // seller name
    new TaxNumber($seller_tax), // seller tax number
    new InvoiceDate($invoice_date), // invoice date as Zulu ISO8601 @see https://en.wikipedia.org/wiki/ISO_8601
    new InvoiceTotalAmount($invoice_amount), // invoice total amount
    new InvoiceTaxAmount($invoice_tax_amount) // invoice tax amount
    // TODO :: Support others tags
])->render();

?>
 <img src="<?= $displayQRCodeAsBase64?>" alt="QR Code" />
