<?php
$title = 'exo 2.3 capitales';
include $_SERVER['DOCUMENT_ROOT']."/view/header.php";
include $_SERVER['DOCUMENT_ROOT'].'/controllers/tableau/exo2_control.php';
?>

<h3>Supprimer du tableau toutes les capitales ne commençant par la lettre 'B', puis affichez le contenu du tableau</h3>

<table class="table table-info col-2">
    <caption>Ville commençant par B</caption>
    <thead>
    <tr>
        <th>Ville commencant par B</th>
        <th>Pays</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($capitale as $ville => $pays){
        if (!preg_match('#^[B]#' ,$ville)){
            unset($capitale[$ville]);} }?>

    <tr>
        <?php foreach ($capitale as $ville => $pays){?>

        <td><?= $ville ?></td>
        </tr><?php
    } ?>

    </tbody>


</table>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/view/footer.php';
?>

$compt = 0;
foreach ($capitale as $key =>$value){
  $result = strtolower (substr($key, 0,1));
  if($result=='b'){
    array_slpice($capitale,$compt, 1);
    $compt--;
  }
$compt++;
}
var_dump($capitale);