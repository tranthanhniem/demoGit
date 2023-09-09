<?php

if (isset($_GET["req"])) {
    $req = $_GET["req"];
    switch ($req) {
        case"userView":
            require 'mUser/userView.php';
            break;
        case"loaiXeView":
            require 'mLoaiXe/loaiXeView.php';
            break;
        case"hangXeView":
            require 'mHangXe/hangXeView.php';
            break;
        case"trangBiView":
            require 'mTrangBi/trangBiView.php';
            break;
        case"xeView":
            require 'mXe/xeView.php';
            break;
        case"locView":
            require 'administrator/pageJS/locView.php';
            break;
        case"soSanhView":
            require 'administrator/pageJS/soSanhView.php';
            break;
        case"default":
            require 'default.php';
            break;
    }
} else {
    require 'default.php';
}
?>

