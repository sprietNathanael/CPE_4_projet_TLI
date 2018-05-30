<?php
//require "../lib/smarty/Smarty.class.php"; // On inclut la classe Smarty
include "./repository/PathoDal.php";
require "layout.php";
require_once "./model/Disease.php";
/**
 * Represents a disease
 */


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
$smartyTemplate->assign('scripts', ["diseases.js", "allDiseases.js"]);
$smartyTemplate->display("allDiseases.tpl");
