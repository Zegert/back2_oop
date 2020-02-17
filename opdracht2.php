<?php 

$orgineleDatum = "2010-03-21";
//var_dump($orgineleDatum);

function NLdate($orgineleDatum){
$opRijDatum = date("d-m-Y", strtotime($orgineleDatum));

$datumUitgepakt = explode('-' , $orgineleDatum);
$dag = $datumUitgepakt[2];
$maandnummer = $datumUitgepakt[1];
$jaar = $datumUitgepakt[0];
$maand = array('Januari','Februari','Maart','April','Mei','Juni','Juli','Augustus','September','Oktober','November','December');
$maandnaam = $maand[$maandnummer -1];

$antwoord = 'De Datum is: ' . $opRijDatum . '<br>';
$antwoordMaand = 'De datum met naam is: ' . $dag . ' ' . $maandnaam . ' ' . $jaar;


return $antwoord . $antwoordMaand;
}

echo NLdate($orgineleDatum);
?>