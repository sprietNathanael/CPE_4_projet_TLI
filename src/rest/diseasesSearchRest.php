<?php

//require_once "layout.php";
require_once "../repository/PathoDal.php";

//$smartyTemplate->assign('currentPage', "accueil");
//$smartyTemplate->display("assets/template/search.tpl");


// Treatements on GET
if(isset($_GET["meridien"]))
    $meridien = $_GET["meridien"];
else
    $meridien = "";

if(isset($_GET["type"]))
    $type = $_GET["type"];
else
    $type = "";

if(isset($_GET["desc"]))
    $desc = $_GET["desc"];
else
    $desc = "";


$pathoDal = new PathoDal();
$pathos = $pathoDal->getList($meridien, $type, $desc);
echo json_encode($pathos, JSON_UNESCAPED_UNICODE);

