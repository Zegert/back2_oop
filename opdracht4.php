<?php

require_once("auto.php");

$auto1 = new auto();
$auto1->kenteken = "97-LNN-2";
$auto1->kilometers = 200;
$auto1->tankinhoud = 60;
$auto1->brandstof = 60;
$auto1->verbruik = 7.1;
$auto1->trekHaak = true;
var_dump($auto1);
echo "<br>";

$auto2 = new auto();
$auto2->kenteken = "44-GG-20";
$auto2->kilometers = 150;
$auto2->tankinhoud = 40;
$auto2->brandstof = 20;
$auto2->verbruik = 6.1;
$auto2->trekHaak = false;
var_dump($auto2);
echo "<br>";

$auto3 = new auto();
$auto3->kenteken = "22-ZB-22";
$auto3->kilometers = 300;
$auto3->tankinhoud = 70;
$auto3->brandstof = 50;
$auto3->verbruik = 8.1;
$auto3->trekHaak = false;
var_dump($auto3);
echo "<br>";

?>
