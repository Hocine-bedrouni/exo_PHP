<?php
include $_SERVER['DOCUMENT_ROOT']."/view/header.php";
$title = 'exo 1';
?>
<p>Exo 1 : Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant </p>
<?php for ($y = 1; $y <= 150; $y=$y+2) {
    echo $y.' -'.' ';
} ?>


<?php
include $_SERVER['DOCUMENT_ROOT'].'/view/footer.php';
?>



