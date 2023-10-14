<?php
include "hlavicka.php";
echo "Dobrý deň, presný čas ako timestamps: ";
date_default_timezone_set("Europe/Bratislava");
echo date("H:i:s");
include "pata.php"
?>