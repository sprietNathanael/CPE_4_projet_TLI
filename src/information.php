<?php

require_once "layout.php";

$devperso = array('donnée1','donnée2','donnée3');
$source = array('donnée4','donnée5','donnée6');
$authors = array('donnée4','donnée5','donnée6');
$bibliographie = array('donnée4','donnée5','donnée6');
$webographie = array('donnée4','donnée5','donnée6');



$smartyTemplate->assign('listDevperso', $devperso);
$smartyTemplate->assign('listSource', $source);
$smartyTemplate->assign('listAuthors', $authors);
$smartyTemplate->assign('listBibliographie', $bibliographie);
$smartyTemplate->assign('listWebographie', $webographie);
$smartyTemplate->assign('currentPage', "informations");
$smartyTemplate->display("information.tpl");
