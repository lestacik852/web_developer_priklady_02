<html>
<link rel="stylesheet" href="style.css">
</html>
<?php
include "hlavicka.php";
include "menu.php";
$name = $_POST["name"];
$second_name = $_POST["second-name"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$live_city = $_POST["live-city"];
$note = $_POST["note"];

$to = "m.lestak95@gmail.com";
$subject = "Kontaktný formulár";
$message = "Meno: $name <br> Priezvisko: $second_name <br> Email: $email <br> Telefón: $tel <br> Je občanom mesta: $live_city <br> Poznámka: $note ";
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "<br>Email bol úspešne odoslaný.";
} else {
    echo "<br>Email sa nepodarilo odoslať.";
}

echo "<div class='form-output'>Tvoje meno je: $name </div>";
echo "<div class='form-output'>Tvoje priezvisko je: $second_name </div>";
echo "<div class='form-output'>Tvoj email je: $email </div>";
if ($tel != ""){
echo "<div class='form-output'>Tvoje telefónne číslo je: $tel </div>";
}
echo "<div class='form-output'>Bývaš v našom meste? $live_city </div>";
if ($note != ""){
echo "<div class='form-output'>Tvoja poznámka: $note </div>";
}
include "pata.php";
?>



