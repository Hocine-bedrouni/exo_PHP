<?php
$title = 'exo 3 vérif mot de passe';
include $_SERVER['DOCUMENT_ROOT'] . "/view/header.php";
include $_SERVER['DOCUMENT_ROOT'] . '/controllers/tableau/exo3_control.php';


$mdp = 'moMolarecup18';
$hashpass = str_split($mdp);


foreach ($hashpass as $valu){
if(ctype_upper($valu)) {
    echo "la chaine $mdp à l'emplacement $valu contient que des majuscule <br>";

    }
if(ctype_lower ($valu)){


}
if(ctype_digit($valu)){

}
if(//condition totale){

}
else{

}
}

//if(ctype_alnum($mdp) AND (strlen($mdp)<8) AND
//
//echo ctype_alnum($mdp);
//echo strlen($mdp);




//switch($password)
//
//case'longueur':
//echo 'il faut 8 carctère max';
//break;
//
//case 'alphanumérik':
//echo ' il faut des chiffres et des lettres';
//break;











?>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/view/footer.php';
?>
<!---->
<!--function check_mdp_format($mdp)-->
<!--{-->
<!--    $majuscule = preg_match('@[A-Z]@', $mdp);-->
<!--    $minuscule = preg_match('@[a-z]@', $mdp);-->
<!--    $chiffre = preg_match('@[0-9]@', $mdp);-->
<!---->
<!--    if(!$majuscule AND !$minuscule AND !$chiffre AND strlen($mdp) < 8)-->
<!--    {-->
<!--        return false;-->
<!--    }-->
<!--    else-->
<!--        return true;-->
<!--}-->
<!---->
<!--if (check_mdp_format("1Formatik") != true)-->
<!--{-->
<!--    echo "Format non correct";-->
<!--}-->
<!--else-->
<!--    echo "Format correct";-->
<!---->
<!---->
