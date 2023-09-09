<?php //

    
?>
<?php

session_start();
require './administrator/elements/mod/userCls.php';
if (isset($_GET['reqact'])) {
    $requestAction = $_GET['reqact'];
    switch ($requestAction) {
        case 'addnew':
            $username = $_POST['username'];
            $password = $_POST['password'];
            $hoten = $_POST['hoten'];
            $gioitinh = $_POST['gioitinh'];
            $ngaysinh = $_POST['ngaysinh'];
            $diachi = $_POST['diachi'];
            $dienthoai = $_POST['dienthoai'];
            $ngaydangky = $_POST['ngaydangky'];
            $user = new user();
            $rs = $user->UserAdd($username, $password, $hoten, $gioitinh, $ngaysinh, $diachi, $dienthoai, $ngaydangky);
             if ($rs) {
                header('location:../../../index.php?req=userView&result=ok');
            } else {
                header('location:../../../index.php?req=userView&result=notok');
            }
            break;  


        default :
            header('location:../../index.php?req=userView');
    }
} else {
    header('location:../../index.php?req=userView');
}
?>
<?php

session_start();
require '../../element_FN/mod/userCls.php';
if (isset($_GET['reqact'])) {
    $requestAction = $_GET['reqact'];
    switch ($requestAction) {
        case 'addnew':
//           xử lí thêm
            $username = $_POST['username'];
            $password = $_POST['password'];
            $hoten = $_POST['hoten'];
            $gioitinh = $_POST['gioitinh'];
            $ngaysinh = $_POST['ngaysinh'];
            $diachi = $_POST['diachi'];
            $dienthoai = $_POST['dienthoai'];
            $user = new user();
            $rs = $user->UserAdd($username, $password, $hoten, $gioitinh, $ngaysinh, $diachi, $dienthoai);
            if ($rs) {
                header('location:../../index.php?req=userView&result=ok');
            } else {
                header('location:../../index.php?req=userView&result=notok');
            }
            break;

        case 'deleteuser':
            $iduser = $_GET['iduser'];
            $user = new user();
            $rs = $user->UserDelete($iduser);
            if ($rs) {
                header('location:../../index.php?req=userView&result=ok');
            } else {
                header('location:../../index.php?req=userView&result=notok');
            }
            break;

        case 'setlock':
            $iduser = $_GET['iduser'];
            $ability = $_GET['ability'];
            $objuser = new user();
            if ($ability == 0) {
                $rs = $objuser->UserSetActive($iduser, 1);
            } else {

                $rs = $objuser->UserSetActive($iduser, 0);
            }
            if ($rs) {
                header('location:../../index.php?req=userView&result=ok');
            } else {
                header('location:../../index.php?req=userView&result=notok');
            }
            break;

        case 'updateuser':
            $username = $_POST['username'];
            $password = $_POST['password'];
            $hoten = $_POST['hoten'];
            $gioitinh = $_POST['gioitinh'];
            $ngaysinh = $_POST['ngaysinh'];
            $diachi = $_POST['diachi'];
            $dienthoai = $_POST['dienthoai'];
            $iduser = $_POST['iduser'];

            $user = new user();
            $rs = $user->UserUpdate($username, $password, $hoten, $gioitinh, $ngaysinh, $diachi, $dienthoai, $iduser);
            if ($rs) {
                header('location:../../index.php?req=userView&result=ok');
            } else {
                header('location:../../index.php?req=userView&result=notok');
            }
            break;

        case 'checkLogin':
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = new user();

            $rs = $user->UserCheckLogin($username, $password);
            if ($rs) {
                if ($username == "admin") {
                    $_SESSION['ADMIN'] = $username;
                } else {
                    $_SESSION['USER'] = $username;
                }
                header('location:../../index.php?req=userView&result=ok');
            } else {
                header('location:../../index.php?req=userView&result=notok');
            }
            break;

        case 'userlogout':
            $timelogin = date('h:i - d/m/Y');
            if (isset($_SESSION['USER'])){
                $namelogin = $_SESSION['USER'];
            }
            if (isset($_SESSION['ADMIN'])){
                $namelogin = $_SESSION['ADMIN'];
            }
            setcookie($namelogin, $timelogin, time() + (86400 * 30),"/");
            session_destroy();
            header('location:../../index.php?');
            break;
        default :
            header('location:../../index.php?req=userView');
            break;
    }
} else {
    header('location:../../index.php');
}
      