<?php

require_once "layout.php";

$smartyTemplate->assign('currentPage', "recherche");
$smartyTemplate->assign('stylesheets', ["diseases.css"]);
$smartyTemplate->assign('scripts', ["search.js", "diseases.js", "jquery.min.js"]);
$smartyTemplate->display("assets/layouts/search.tpl");

