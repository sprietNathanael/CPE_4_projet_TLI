<?php
require_once "layout.php";
require_once "diseases.php";

$smartyTemplate->assign('currentPage', "search");
$smartyTemplate->display("search.tpl");


//exemple
$meridien = "poumon";
$pathologie = "p";
$caracteristique = "froid";

// retrieve data from api rest (url probablement à changer)
$url ="http://localhost/CPE_4_projet_TLI/src/diseasesSearchRest.php?meridien=".$meridien."&pathologie=".$pathologie."&caracteristique=".$caracteristique;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_USERPWD, "$user:$password");
$result=curl_exec($ch);
curl_close($ch);

// bind class
$data = json_decode($result, true);
$di = new Disease();
foreach ($data as $key => $value) $class->{$key} = $value;

var_dump($di);