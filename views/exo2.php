<?php
include 'header.php';
?>
<h2>Exo 2 : Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers</h2>
<?php
for ($a = 1; $a <= 500; $a++) {?>

<p><?= $a ?>) Je dois faire des sauvegardes régulières de mes fihiers</p>
<?php }

include 'footer.php';
?>
