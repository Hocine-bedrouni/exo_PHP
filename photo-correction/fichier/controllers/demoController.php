<?php
$final_array = [];
// ouverture et lecture du fichier, stockage du résultat sous forma de tableau
$file = file('http://bienvu.net/misc/customers.csv');
// boucle parcourant le fichier
foreach ($file as $value) {
    // séparation des valeurs selon un marqueur et stockage de chacune dans un tableau
    $coordonnee = explode(',', $value);
    // stockage du tableau dans le tableau final
    array_push($final_array, $coordonnee);
}
//var_dump($final_array);