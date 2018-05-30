<?php

include "./repository/PathoDal.php";
require_once "layout.php";
require_once "./model/Disease.php";

$pathoDal = new PathoDal();
$pathos = $pathoDal->getAll();
$diseases = array();

foreach ($pathos as $patho)
{
    $dis = new Disease($patho["desc"], $patho["type"], $patho["mer"]);
    array_push($diseases, $dis);
}

$smartyTemplate->assign('diseases', $diseases);
$smartyTemplate->assign('currentPage', "pathologies");
$smartyTemplate->assign('stylesheets', ["diseases.css"]);
$smartyTemplate->assign('scripts', ["allDiseases.js", "diseases.js"]);
$smartyTemplate->display("allDiseases.tpl");
