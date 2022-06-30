<?php
chk_login();
if (isset($_GET['act'])) {
    $a = $_GET['act'];
    switch ($a) {
        case 'detail':
            include('modules/product/detail.php');
            break;
        default:
            include('modules/product/list.php');
            break;
    }
} else {
    include('modules/product/list.php');
}