<?php
$title = 'exo 1 générer un lien';
include $_SERVER['DOCUMENT_ROOT']."/view/header.php";
include $_SERVER['DOCUMENT_ROOT'].'/controllers/fonction/exo1_control.php';
?>

<H2>Exo 1 fonction Générer un lien</H2>


<H3><?php createlink("https://www.reddit.com/", "Reddit Hug") ?>;</H3>


<?php
include $_SERVER['DOCUMENT_ROOT'].'/view/footer.php';
?>
