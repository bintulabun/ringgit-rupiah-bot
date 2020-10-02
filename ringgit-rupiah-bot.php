<?php
$kurs = file_get_contents("https://api.exchangeratesapi.io/latest?base=MYR&symbols=IDR");

$kurs = json_decode($kurs,true);

$idr = $kurs['rates']['IDR'];
$idr = (int)$idr - 170;//selisih harga
$idr = number_format($idr);
$date = $kurs['date'];

echo "RM1 = $idr

$date";

?>
