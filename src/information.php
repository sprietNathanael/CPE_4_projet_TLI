<?php
require "../lib/smarty/Smarty.class.php"; // On inclut la classe Smarty


$devperso = array("testdevperso","test2devperso"
);

//$source = array("testsource","test2source
//);
//
//$authors = array("testauthors","test2authors
//);
//
//$bibliography = array("testbibliography","test2bibliography
//);
//
//$webography = array("testwebography","test2webography
//);

$smarty = new Smarty();
$smarty->assign('devperso', $devperso);
//$smarty->assign('source', $source);
//$smarty->assign('authors', $authors);
//$smarty->assign('bibliography', $bibliography);
//$smarty->assign('webography', $webography);
$smarty->display("information.tpl");


