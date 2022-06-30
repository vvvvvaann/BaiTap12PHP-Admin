<?php
if (isset($_GET['act'])) {
    $a = $_GET['act'];
    switch ($a) {
        case "add_cart":
            include("modules/cart/add_cart.php");
            break;
        case "del_cart":
            include("modules/cart/del_cart.php");
            break;
        default:
            include("modules/cart/view_cart.php");
            break;
    }
} else {
    include("modules/cart/view_cart.php");
}