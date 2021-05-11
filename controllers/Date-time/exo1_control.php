<?php
date_default_timezone_set("Europe/Paris");


//regex date:

//$datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
//$date = "2015-12-06";
//
//if (preg_match($datePattern, $date))
//{
//echo "Date ".$date." valide.<br>";
//}
//else
//{
//echo "Date ".$date." erronée.<br>";
//}



//exo 1 trouver le num de la semaine

function numero_semaine($date_test){
    $formatodat = strtotime ($date_test);
    return date('W',$formatodat);
}

$weekyear =  numero_semaine('14-07-2019');




//exo 2 combien de jour avant la fin de la formation

function interval_date($target)
{
    $origin = new DateTime();
    $targ = new DateTime($target);
    $interval = $targ->diff($origin);
    return $interval;
}
$temkirest = interval_date('12/10/2021');


// exo année bissextile


$pas = '';
function bissextil()
{
   $datedujour = new DateTime();
   $date["annee"] = $datedujour->format('Y');
   $date["anbisex"] =$datedujour->format('L');
    return $date;

}
$pas = bissextil(2023);

