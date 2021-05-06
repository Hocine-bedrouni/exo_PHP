<?php

function somme($tab){
    $resultat = 0;
    foreach ($tab as $valeur){
        $resultat += $valeur;
    }
    return $resultat;
}
$tablo = array(4, 3, 8, 2);
$som= somme($tablo);
