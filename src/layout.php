<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

require_once "../lib/smarty/Smarty.class.php"; // On inclut la classe Smarty
require_once "repository/UserConnection.php";

session_start();

$userConnection = new UserConnection();
$smartyTemplate = new Smarty();

$smartyTemplate->assign('loggedIn', $userConnection->isLogIn());