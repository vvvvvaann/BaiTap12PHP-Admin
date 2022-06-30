<?php
if (isset($_GET['act'])) {
    $a = $_GET['act'];
    switch ($a) {
            // nếu chọn liên kết tên sản phẩm (name) thì gọi detail.php hiển thị chi tiết sp
        case 'detail':
            include('modules/news/detail.php');
            break;
            //nếu chưa chọn liên kết tên sản phẩm (name) thì gọi list.php hiển thị sp
        default:
            include('modules/news/list.php');
            break;
    }
} else {
    include('modules/news/list.php');
}