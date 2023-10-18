<?php
/*
Úloha č.1: Príklad na prácu s premennými
Vypíšte na stránku nasledujúci text:
Študent Jozef Mrkvička sa narodil 03.04.2000, z maturitnej skúšky má známku 1.5 a od septembra 2022 nastúpi do nového zamestnania ako PHP programátor.
V Bratislave dňa 18.06.2022
Poznámka: Dátum narodenia, známku a rok + aktuálny dátum nastavte tak, aby sa dali meniť v zdrojovom kóde (t.j. cez premenné).
Bonusová úloha: Naformátujte text farebne a “tučne” podľa vzoru.
*/

$datum_narodenia = "06.04.2000"; //AltGr + ô reprezenuje $
$znamka = 1.5;
$znamka = str_replace('.',',',$znamka);  //Nahradí desatinú bodku za čiarku, ' vlozime cez AltGr + P
$od_kedy = "september 2022";

echo "<span style='color: darkred'>Student Jozef Mrkvička sa narodil </span><b style='color: red'>". $datum_narodenia . "</b>";
echo "<span style='color: orange'>, z maturitnej skúšky má známku </span><b style='color: red'>" . $znamka . "</b>";
echo "<span style='color: green'> a od <b>". $od_kedy . "</b></span>";
echo "<span style='color: deepskyblue'> nastúpi do nového zamestnania ako PHP prográmator.</span>";
echo "<br><span style='color: dodgerblue'>V Bratislave dňa <b>".date("d.m.Y") . "</b></span>";


echo "<br>Študent Jozef Mrkvička sa narodil ".$datum_narodenia.", z maturitnej skúšky má známku ".$znamka." a od ".$od_kedy." nastúpi do nového zamestnania ako PHP programátor.<br>V Bratislave dňa ".date("d.m.Y");
?>