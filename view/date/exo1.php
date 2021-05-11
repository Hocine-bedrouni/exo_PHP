<?php
$title = 'exo 1 Date et heure';
include $_SERVER['DOCUMENT_ROOT'] . "/view/header.php";
include $_SERVER['DOCUMENT_ROOT'] . '/controllers/date-time/exo1_control.php';

?>

<H2>exo1  Trouver le numero de la semaine suivante </H2><br>
<P>la date 14/07/2019 représente la semaine  <?= $weekyear ?></P>




<H2>exo2 combien de jour avant la fin de la formation </H2><br>
<P>Il reste <?= $temkirest->days ?></P>


<?php
?>
<H2>exo3 Comment déterminer si une année est bissextile</H2><br>

<p>l'année <?= $pas["annee"] ?> est <?= $pas["anbisex"] === 1 ? "bissextile" : "non bissextile" ?> </p>



<?php
//
//
//
//
//
//
//
//
//
//
//
////
////function date_valid
////
////}if (checkdate(11, 28, 2019)){
////    echo 'Date valide';
////
////}else {
////    echo 'Date non valide';
////
////}
////
////?>
<!---->
<!---->


<?php
include $_SERVER['DOCUMENT_ROOT'].'/view/footer.php';
?>
