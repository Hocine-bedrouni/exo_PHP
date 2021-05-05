<?php
include $_SERVER['DOCUMENT_ROOT'].'/view/header.php';
$title = 'exo 1';
include $_SERVER['DOCUMENT_ROOT'].'/controllers/tableau/exo1_control.php';
?>
<div class="d-flex">
<div class="table-responsive">
    <h3>Affichez votre tableau (dans un tableau HTML) pour faire apparaitre sur chaque ligne le nom du mois et le nombre
        de jours du mois</h3>
    <table class="table  table-info col-2">
        <caption>Affichage des mois et du nombre de jours</caption>
        <thead>
        <tr>
            <th>Mois</th>
            <th> Nb de jours</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tab as $mois => $nbjour) { ?>
            <tr>
            <td><?= $mois ?> </td>
            <td><?= $nbjour ?></td>
            </tr><?php
        } ?>
        </tbody>
    </table>
</div>


<div class="table-responsive ">
    <h3>Triez ensuite votre tableau en utilisant comme critère le nombre de jours</h3>
    <table class="table  table-info col-2">
        <caption>Tableau trié en fonction du nombre de jour</caption>
        <thead>
        <tr>
            <th>Mois</th>
            <th> Nb de jours</th>
        </tr>
        </thead>
        <tbody>
        <?php
        asort($tab);
        foreach ($tab as $mois => $nbjour) { ?>
            <tr>
            <td><?= $mois ?></td>
            <td><?= $nbjour ?></td>
            </tr><?php
        } ?>
        </tbody>
    </table>
</div>
</div>





        <?php
include $_SERVER['DOCUMENT_ROOT'].'/view/footer.php';
?>
