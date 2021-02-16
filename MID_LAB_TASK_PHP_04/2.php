<?php


$Vat = 15;


$VatDivisor = 1 + ($Vat / 100);


$price = 20;


$priceBeforeVat = $price / $VatDivisor;


$vatAmount = $price - $priceBeforeVat;


echo number_format($priceBeforeVat, 2);


echo 'VAT = ' . $Vat . '% - ' . number_format($vatAmount, 2);


echo $price;
?>