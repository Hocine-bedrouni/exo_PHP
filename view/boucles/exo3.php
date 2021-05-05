<?php
$title="exo3";
include "../header.php";
include '../../controllers/boucles/exo3_control.php';
?>


    <div class="table-responsive ">
        <h2>Ecrire un script qui affiche la table de multiplication totale dans un tableau HTML</h2>
        <table class="table  table-info col-6">
            <caption>Table de multiplication jusque 12</caption>
            <thead>
            <tr>
                <th>-</th>
                <?php
                for ($a = 0; $a <= 12; $a++) {
                    ?>
                    <th><?= $a ?></th>
                    <?php
                } ?>
            </tr>
            </thead>
            <tbody>
            <?php
            for ($b = 0;
            $b <= 12;
            $b++){
            ?>
            <tr>
                <td><?= $b ?></td>
                <?php
                for ($c = 0; $c <= 12; $c++) {
                    ?>
                    <td><?= $b * $c ?></td>
                    <?php
                } ?>
                <?php
                }
                ?>
            </tr>
            </tbody>
        </table>



<?php
include '../footer.php';
?>