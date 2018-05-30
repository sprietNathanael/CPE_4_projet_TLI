<?php

require_once "layout.php";

/**
 * @TODO: Envoyer message de résultat
 */
if (isset($_POST["logIn"])){
    $userConnection->logIn($_POST["username"], $_POST["password"]);
    header("Refresh:0");
}
/**
 * @TODO: Envoyer message de résultat
 */
if (isset($_POST["signIn"]) && isset($_POST["sign_username"]) && isset($_POST["sign_password"]) && isset($_POST["sign_password_confirmed"])){
    if ($_POST["sign_password"] === $_POST["sign_password_confirmed"]){
        $userConnection->signIn($_POST["sign_username"], $_POST["sign_password"], $_POST["sign_name"], $_POST["sign_firstname"]);
        header("Refresh:0");
    }
}

$smartyTemplate->assign('currentPage', "accueil");
$smartyTemplate->display("index.tpl");
