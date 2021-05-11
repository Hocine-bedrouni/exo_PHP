<?php
//include $_SERVER['DOCUMENT_ROOT'].'/view/header.php';
//$title = 'connexion BDD record';
//include $_SERVER['DOCUMENT_ROOT'].'/controllers/tableau/exo1_control.php';

try {
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'root','admin');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo "Erreur : ". $e->getMessage() ."<br>";
    echo "N° :" .$e->getCode();
    die("Fin du script - va chier");
}
$requete = $db->query("SELECT * FROM record.artist");
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();

$requete = $db->prepare("select * from record.disc where disc.artist_id =?");
//$requete->execute(array($_GET["disc_id"]));
$disc = $requete->fetchALL(PDO::FETCH_OBJ);


?>
<body>


<?php foreach ($tableau as $artist){
if(isset($disc->artist_id)){
?>
<div>
    Disc N° <?= $disc->disc_id ?>
    Disc name <?= $disc->disc_name ?>
    Disc year <?= $disc->disc_year ?>
</div>
<?php } else{
    ?>

        <div>
            <a href=" ./db.php?disc.artist_id=<?= $artist->artist_id; ?>"><?= $artist->artist_name; ?> </a>
        </div>
    <?php } ?>




<?php
} ?>




</body>






