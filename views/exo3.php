<?php
include 'header.php';
?>



            <div class="table-responsive ">
                <h2>Ecrire un script qui affiche la table de multiplication totale dans un tableau HTML</h2>
                <table class="table  table-info col-5">
                    <caption>Table de multiplication</caption>
                    <thead>
                    <tr>
                        <th> - </th>
                        <?php
                        for ($a = 0; $a <= 12; $a++) {
                            ?>
                            <th><?= $a ?></th>
                            <?php
                        }
                        ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    for ($b = 0; $b <= 12; $b++) {
                        ?>
                        <tr>
                            <td><?= $b ?></td>
                            <?php
                            for ($c = 0; $c <= 12; $c++) {
                                ?>
                                <td><?= $b * $c ?></td>
                                <?php
                            }
                            ?>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
















<?php
include 'footer.php';
?>