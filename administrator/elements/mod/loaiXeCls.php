<?php 
$a = '../administrator/elements/mod/database.php';
$h = './elements/mod/database.php';
$t = './administrator/elements/mod/database.php';
$s = '../../elements/mod/database.php';
if (file_exists($s)) {
    $f = $s;
}
if (!file_exists($s)) {
    $f = $t;
}
if (!file_exists($t) && !file_exists($s)) {
    $f = $h;
}
if (!file_exists($t) && !file_exists($s) && !file_exists($h)) {
    $f = $a;
}
if (!file_exists($t) && !file_exists($s) && !file_exists($h) && !file_exists($a)) {
    $f = '../elements/mod/database.php';
}
require_once $f;

class loaiXe extends database {

    public function loaiXeAdd($tenLoai) {
        $add = $this->connect->prepare("INSERT INTO loaixe(tenLoai) VALUES (?)");
        $add->execute(array($tenLoai));
        return $add->rowCount();
    }
}
?>
