<?php
require_once "layout.php";

$smartyTemplate->assign('currentPage', "recherche");
$smartyTemplate->assign('stylesheets', ["diseases.css"]);
$smartyTemplate->assign('scripts', ["search.js"]);
$smartyTemplate->display("search.tpl");

