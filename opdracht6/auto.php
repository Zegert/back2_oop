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
?>
