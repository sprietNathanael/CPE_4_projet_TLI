<?php

require_once "layout.php";
$userConnection->logOut();
header("Location: index.php");
