<?php
require_once "../lib/smarty/Smarty.class.php"; // On inclut la classe Smarty

$smarty = new Smarty();
$smarty->assign('currentPage', "recherche");
$smarty->display("assets/template/layout.tpl");
