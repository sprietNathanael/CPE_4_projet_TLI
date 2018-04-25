<?php
require "../lib/smarty/Smarty.class.php"; // On inclut la classe Smarty

$smarty = new Smarty();
$smarty->assign('currentPage', "accueil");
$smarty->display("index.tpl");
