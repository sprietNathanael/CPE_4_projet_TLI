<?php

require_once "layout.php";

if (isset($_POST["logIn"])){
    $userConnection->logIn($_POST["username"], $_POST["password"]);
    header("Refresh:0");
}

$smartyTemplate->assign('currentPage', "accueil");
$smartyTemplate->display("index.tpl");
