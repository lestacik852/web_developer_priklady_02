<?php
function scitaj($a, $b) {
    return $a + $b;
}
function odcitanie($a, $b) {
    return $a - $b;
}
function delenie($a, $b) {
    return $a / $b;
}
function nasob($a, $b) {
    return $a * $b;
}
$a = 2.3;
$b = 3;
$sucet = scitaj($a, $b);
$odcitanie = odcitanie($a, $b);
$delenie = delenie($a, $b);
$nasob = nasob($a, $b);

echo "<br>Výsledok sčítania hodnôt $a a $b je: $sucet";

echo "<br>Výsledok sčítania hodnôt " . $a . " a " . $b . " je: " .$sucet;
echo "<br>Výsledok odčítania hodnôt " . $a . " a " . $b . " je: " . $odcitanie;
echo "<br>Výsledok delenia hodnôt " . $a . " a " . $b . " je: " . $delenie;
echo "<br>Výsledok nasobenia hodnôt " . $a . " a " . $b . " je: " . $nasob;


?>