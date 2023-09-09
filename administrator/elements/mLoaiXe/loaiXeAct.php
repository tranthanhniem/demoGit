<?php

session_start();
require '../../elements/mod/loaiXeCls.php';
if (isset($_GET['reqact'])) {
    $requestAction = $_GET['reqact'];
    switch ($requestAction) {
        case 'addnew':
            $tenLoai = $_POST['tenLoai'];

            $loaiXe = new loaiXe();
            $rs = $loaiXe->loaiXeAdd($tenLoai);
             if ($rs) {
                header('location:../../../index.php?req=loaiXeView&result=ok');
                echo 'Thêm thành công';
            } else {
                header('location:../../../index.php?req=loaiXeView&result=notok');
            }
            break;  


        default :
            header('location:../../index.php?req=loaiXeView');
    }
} else {
    header('location:../../index.php?req=loaiXeView');
}
?>