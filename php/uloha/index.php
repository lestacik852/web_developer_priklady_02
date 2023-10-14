<?php
include "hlavicka.php";
include "menu.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if ($id == 1){
        include "o_meste.php";
    }
    else if ($id == 2){
        include "foto.php";
    }
    else if ($id == 3) {
        include "mapa.php";
    }
} else {
    include "o-meste.php";
}
include "pata.php";
