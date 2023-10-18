<?php
include "hlavicka.php";
$x = $_GET["x"];
echo $x . " B = " . $x / 1024 . " KiB";
include "pata.php";
?>
