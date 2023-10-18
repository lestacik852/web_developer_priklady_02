<?php
date_default_timezone_set("Europe/Bratislava");
$time_now = date("H");
if ($time_now >= 5 && $time_now <12)
    echo "Dobré ráno";
 else if ($time_now >= 12 && $time_now < 18)
    echo "Dobrý deň";
else
    echo "Dobrý večer";
?>