<?php 

class auto{
    public $kenteken;
    public $merk;
    public $model;
    public $kilometers;
    public $tankinhoud;
    public $brandstof;
    public $verbruik;
    public $trekHaak = false;

    function tanken($brandstof , $getankteLiter , $tankinhoud){
        $this->brandstof = $brandstof;
        return $brandstof;
    }
    function rijden($geredenkm , $verbruik , $brandstof){
        $verbruikteBrandstof = $geredenkm / 100 * $verbruik;
        $brandstof = $brandstof - $verbruikteBrandstof;
        $this->brandstof = $brandstof;
        return $brandstof;
    }
    function verbruik($geredenkm , $verbruik , $brandstof){
        $verbruikt = $verbruik * $geredenkm / 100;
        $bereik = $brandstof * 100 / $verbruik;
        $round_bereik = round($bereik, 2);
        return $round_bereik;
    }
}

$auto1 = new auto();
$auto1->kenteken = "97-LNN-2";
$auto1->merk = "Mercedes";
$auto1->model = "190D";
$auto1->kilometers = 0;
$auto1->tankinhoud = 60;
$auto1->brandstof = 0;
$auto1->verbruik = 7.1;
$auto1->trekHaak = true;

?>
