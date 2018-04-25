<?php
require "../lib/smarty/Smarty.class.php"; // On inclut la classe Smarty


$devperso = array('donnée1','donnée2','donnée3');
$source = array('donnée4','donnée5','donnée6');
$authors = array('donnée4','donnée5','donnée6');
$bibliographie = array('donnée4','donnée5','donnée6');
$webographie = array('donnée4','donnée5','donnée6');



$smarty = new Smarty();
$smarty->assign('listDevperso', $devperso);
$smarty->assign('listSource', $source);
$smarty->assign('listAuthors', $authors);
$smarty->assign('listBibliographie', $bibliographie);
$smarty->assign('listWebographie', $webographie);
$smarty->assign('currentPage', "informations");
$smarty->display("information.tpl");
