<?php
$breedte = $_POST['breedte'];
$lengte = $_POST['lengte'];
$hoogte = $_POST['hoogte'];

function bereken($breedte, $lengte, $hoogte = 0)
{

    if ($hoogte > 0) {
        $antwoord = $lengte * $hoogte * $breedte;
        return $antwoord;
    } else {
        $antwoord = $lengte * $breedte;
        return $antwoord;
    }
}

echo "Het antwoord is: " . bereken($breedte, $lengte, $hoogte);

?>
