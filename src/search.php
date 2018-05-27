<?php
require_once "layout.php";
require_once "./model/Disease.php";

$smartyTemplate->assign('currentPage', "search");
$smartyTemplate->display("search.tpl");


//exemple TODO : à effectuer lors d'un clic bouton rechercher ou autre
$meridien = "poumon";
$pathologie = "p";
$caracteristique = "froid";

// retrieve data from api rest (url probablement à changer)
$url ="http://localhost/CPE_4_projet_TLI/src/rest/diseasesSearchRest.php?meridien=".$meridien."&pathologie=".$pathologie."&caracteristique=".$caracteristique;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($ch);
curl_close($ch);
// décode
$pathos= json_decode($result, true);

// bind class Disease
$diseasesArray = array();
foreach ($pathos as $patho){
    $dis = new Disease($patho["desc"], $patho["type"], $patho["nom"]);
    array_push($diseasesArray, $dis);
}

var_dump($diseasesArray);
// TODO : assigner $diseasesArray à un tableau d'un fichier tpl :)