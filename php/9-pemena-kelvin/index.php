<?php
include "hlavicka.php";
$kelvin = $_GET["kelv"];
$celsius = $kelvin - 273.15;
echo $kelvin . " v Kelvinoch == " . $celsius . " v stupňoch Celsia";
include "pata.php";
?>
