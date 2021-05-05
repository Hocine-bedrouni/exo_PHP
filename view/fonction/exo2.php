<?php
$title = 'exo 1 générer un lien';
include $_SERVER['DOCUMENT_ROOT']."/view/header.php";
include $_SERVER['DOCUMENT_ROOT'].'/controllers/fonction/exo1_control.php';


$tablo = array(4, 3, 8, 2);
$clef = count($tablo);
echo "$clef";

$tablo = array(4, 3, 8, 2);

function somme($tab){
for($i = 0; $i <= $clef; $i++){
    $resultat = $resultat + $tablo[$clef];
    echo "$resultat";
}

$var = "somme($tablo)";
}
//$resultat = sum($tab);













include $_SERVER['DOCUMENT_ROOT'].'/view/footer.php';
?>
