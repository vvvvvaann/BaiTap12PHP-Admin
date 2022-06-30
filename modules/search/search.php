<?php
$a = $_GET['act'];
switch ($a) {
    case "xl_search":
        include("modules/search/xl_search.php");
        break;
    case "tt_search":
        include("modules/search/tt_search.php");
        break;
    default:
        echo "Loi!";
}