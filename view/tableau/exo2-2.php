<?php

include $_SERVER['DOCUMENT_ROOT'] . "/view/header.php";
$title = 'exo 2.2 capitales';
include $_SERVER['DOCUMENT_ROOT'] . '/controllers/tableau/exo2-1_control.php';
?>

<h3>Affichez la liste des Pays (par ordre alphabétique) suivie du nom des capitales</h3>

<table class="table table-info col-2">
    <caption>Tableau trié par ordre alphabétique de Pays</caption>
    <thead>
    <tr>
        <th>Pays</th>
        <th>Capitales</th>
    </tr>
    </thead>
    <tbody>
    <?php asort($capitale);
    foreach ($capitale as $ville => $pays) { ?>
        <tr>
        <td><?= $pays?></td>
        <td><?= $ville ?></td>
        </tr><?php
    } ?>
    <tr>
        <td>nombre de pays : <?= count($capitale)?> </td>
        <td>------</td>
    </tr>
    </tbody>


</table>


<?php
include $_SERVER['DOCUMENT_ROOT'].'/view/footer.php';
?>

