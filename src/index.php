<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

require "../lib/smarty/Smarty.class.php"; // On inclut la classe Smarty

//-- Test si user connecté
require "core/UserConnection.php";
session_start();
$userConnection = new UserConnection();
//--

$smarty = new Smarty();
$smarty->assign('currentPage', "accueil");
$smarty->assign('loggedIn', $userConnection->isLogIn());
$smarty->display("index.tpl");
