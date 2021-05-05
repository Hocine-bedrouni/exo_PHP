<?php
$title = 'exo 3.1 capitales';
include $_SERVER['DOCUMENT_ROOT'] . "/view/header.php";
include $_SERVER['DOCUMENT_ROOT'] . '/controllers/tableau/exo3_control.php';
?>

<h3>Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements</h3>

<table class="table  table-info col-3">
    <caption>Tableau trié par ordre alphabétique de Région</caption>

    <thead>
    <tr>
        <th>Région</th>
        <th>Département</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($departements as $region => $depart){?>
    <tr>
        <td> <?= $region ?> </td>
        <td>
            <?php
            foreach ($depart as $depclef => $depvaleur){
           echo $depvaleur ." -- "; } ?>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/view/footer.php';
?>