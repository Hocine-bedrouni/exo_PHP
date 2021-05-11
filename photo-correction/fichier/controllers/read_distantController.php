<?php
$final_array = [];
$file = file('http://bienvu.net/misc/customers.csv');
foreach ($file as $value) {
    $coordonnee = explode(',', $value);
    array_push($final_array, $coordonnee);
}

