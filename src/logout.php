<?php

require "layout.php";
$userConnection->logOut();
header("Location: index.php");
