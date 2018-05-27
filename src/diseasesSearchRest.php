<?php

//require_once "layout.php";
require_once  "./core/PathoDal.php";

//$smartyTemplate->assign('currentPage', "accueil");
//$smartyTemplate->display("search.tpl");


// Treatements on GET
if(isset($_GET["meridien"]))
    $meridien = $_GET["meridien"];
else
    $meridien = "";

if(isset($_GET["pathologie"]))
    $pathologie = $_GET["pathologie"];
else
    $pathologie = "";

if(isset($_GET["caracteristique"]))
    $caracteristique = $_GET["caracteristique"];
else
    $caracteristique = "";


$pathoDal = new PathoDal();
$pathos = $pathoDal->getList($meridien, $pathologie, $caracteristique);
echo json_encode($pathos, JSON_UNESCAPED_UNICODE);

