<?php
require "../lib/smarty/Smarty.class.php"; // On inclut la classe Smarty

$smarty = new Smarty();
$smarty->assign('currentPage', "recherche");
$smarty->display("assets/layouts/layout.tpl");
