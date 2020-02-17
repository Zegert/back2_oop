<?php
require_once("auto.php");

$getankteLiters = 55; //aantal liters dat getankt is
$auto1->brandstof += $getankteLiters;
$geredenkm = 200;// aantal kilometers die gereden zijn
$auto1->kilometers += $geredenkm;

echo "Auto: " . $auto1->merk . " " . $auto1->model . "<br> Kenteken: " . $auto1->kenteken . "<br>";

if($auto1->tanken($auto1->brandstof , $getankteLiters , $auto1->tankinhoud) > $auto1->tankinhoud){
    echo "De tank zit te vol!<br>";
}else{
    echo "U heeft nog " . $auto1->tanken($auto1->brandstof , $getankteLiters , $auto1->tankinhoud) . " liter brandstof.<br>";
}

echo "U heeft " . $geredenkm . " kilometer gereden, u heeft nog " . $auto1->rijden($auto1->kilometers , $auto1->verbruik , $auto1->brandstof) . " liter brandstof.<br>";
echo "Het aantal kilometer dat u nog kunt rijden is: " . $auto1->verbruik($auto1->kilometers , $auto1->verbruik , $auto1->brandstof) . "<br>";

if($auto1->trekHaak = true){
    echo $auto1->merk . " " . $auto1->model . " heeft een trekhaak.";
}else{
    echo $auto1->merk . " " . $auto1->model . " heeft geen trekhaak.";
}
?>