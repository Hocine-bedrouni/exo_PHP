<?php
include $_SERVER['DOCUMENT_ROOT']."/view/header.php";
$title = 'exo 2';
include $_SERVER['DOCUMENT_ROOT'].'/controllers/tableau/exo2_control.php';
?>

<h3>Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays</h3>

<table class="table  table-info col-3">
<caption>Tableau trié par ordre alphabétique de Capitale</caption>>
    <thead>
    <tr>
        <th>Capitale</th>
        <th>Pays</th>
    </tr>
    </thead>
    <tbody>
    <?php ksort($capitale);
        foreach ($capitale as $ville => $pays) { ?>
            <tr>
                <td><?= $ville ?></td>
                <td><?= $pays ?></td>
            </tr><?php
        } ?>
    </tbody>


</table>
