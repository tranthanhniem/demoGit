<!--<div>Quản lý người dùng</div>
<hr>
<div>Người dùng mới</div>
<div>
    <form name="newuser" id="formreg" method="post" action="./administrator/elements/mUser/userAct.php?reqact=addnew">
        <input type="hidden" name="ngaydangky" value="
        <?php
        $today = date("d/m/Y");
        echo $today;
        ?>"/>
        <table>
            <tr>
                <td>Tên đăng nhập:</td>
                <td><input type="text" name="username"/></td>
            </tr>
            <tr>
                <td>Mật khẩu:</td>
                <td><input type="password" name="password"/></td>
            </tr>
            <tr>
                <td>Họ tên:</td>
                <td><input type="text" name="hoten"/></td>
            </tr>
            <tr>
                <td>Giới tính:</td>
                <td>Nam<input type="radio" name="gioitinh" value="1" checked="true" />
                    Nữ<input type="radio" name="gioitinh" value="0" />
                </td>
            </tr>
            <tr>
                <td>Ngày sinh:</td>
                <td><input type="date" name="ngaysinh"/></td>
            </tr>
            <tr>
                <td>Địa chỉ:</td>
                <td><input type="text" name="diachi"/></td>
            </tr>
            <tr>
                <td>Điện thoại:</td>
                <td><input type="tel" name="dienthoai"/></td>
            </tr>
            <tr>
                <td><input type="submit" id="btnsubmit" value="Tạo mới"/></td>
                <td><input type="reset" value="Làm lại"/><b id="noteForm"></b></td>
            </tr>
        </table>
    </form>
</div>
<hr/>
<?php
//require './administrator/elements/mod/userCls.php';
?>
<div class="title_user">Danh sách người dùng</div>
<div class="content_user">
    <?php
//    $obj_User = new user();
//    $list_User = $obj_User->UserGetAll();
//    $l = count($list_User);
    ?>
    <p>Trong bảng có <b><?php echo $l; ?></b></p>
    <?php
//    if ($l > 0) {
        ?>
        <table border="1" align="center">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>Ngày Sinh</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Ngày đăng ký</th>
                    <th>Hoạt động</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody align="center">
                <?php
                foreach ($list_User as $v) {
                    ?>
                    <tr>
                        <td><?php echo $v->maUser; ?></td>
                        <td><?php echo $v->username; ?></td>
                        <td><?php echo $v->password; ?></td>
                        <td><?php echo $v->hoten; ?></td>
                        <td>
                            <?php
                            if ($v->gioitinh == 0) {
                                ?>
                            <img class="iconimg" src="./administrator/img/girl.png"/>
                                <?php
                            } else {
                                ?>
                                <img class="iconimg" src="./administrator/img/boy.png"/>
                                <?php
                            }
                            ?>
                        </td>
                        <td><?php echo $v->ngaysinh; ?></td>
                        <td><?php echo $v->diachi; ?></td>
                        <td><?php echo $v->dienthoai; ?></td>
                        <td><?php echo $v->ngaydangky; ?></td>
                        <td>
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                                if ($v->ability == 0) {
                                    ?>
                                    <a href="../../../administrator/elements/mUser/userAct.php?reqact=setlock&iduser=<?php echo $v->iduser; ?>
                                       &ability=<?php echo $v->ability; ?>">
                                        <img class="iconimg" src="./administrator/img/block.png" />
                                    </a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="../../../administrator/elements/mUser/userAct.php?reqact=setlock&iduser=<?php echo $v->iduser; ?>
                                       &ability=<?php echo $v->ability; ?>">
                                        <img class="iconimg" src="./administrator/img/unblock.png" />
                                    </a>
                                    <?php
                                }
                            } else {
                                if ($v->ability == 0) {
                                    ?>
                                    <img class="iconimg" src="./administrator/img/block.png" />
                                    <?php
                                } else {
                                    ?>
                                    <img class="iconimg" src="./administrator/img/unblock.png" />
                                    <?php
                                }
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                                ?>
                                <a href="./element/mUser/userAct.php?reqact=deleteuser&iduser=<?php echo $v->iduser; ?>">
                                    <img class="iconimg" src="./administrator/img/xoa.png" />
                                </a>
                                <?php
                            } else {
                                ?>
                                <img class="iconimg" src="./administrator/img/xoa.png" />
                                <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php
        
    ?>
</div>-->

<div>Quản lý người dùng</div>
<hr>
<div>Người dùng mới</div>
<div class="content_user">
    <form name="newuser" id="formreg" method="post" action="./element_FN/mUser/userAct.php?reqact=addnew">
        <table>
            <tr>
                <td>Tên đăng nhập:</td>
                <td><input type="text" name="username"/></td>
            </tr>
            <tr>
                <td>Mật khẩu:</td>
                <td><input type="password" name="password"/></td>
            </tr>
            <tr>
                <td>Họ tên:</td>
                <td><input type="text" name="hoten"/></td>
            </tr>
            <tr>
                <td>Giới tính:</td>
                <td>Nam<input type="radio" name="gioitinh" value="1" checked="true"/>
                    Nữ<input type="radio" name="gioitinh" value="0"/>
                </td>
            </tr>
            <tr>
                <td>Ngày sinh:</td>
                <td><input type="date" name="ngaysinh"/></td>
            </tr>
            <tr>
                <td>Địa chỉ:</td>
                <td><input type="text" name="diachi"/></td>
            </tr>
            <tr>
                <td>Điện thoại:</td>
                <td><input type="tel" name="dienthoai"/></td>
            </tr>
            <tr>
                <td><input type="submit" id="btnsubmit" value="Tạo mới"/></td>
                <td><input type="reset" value="Làm lại"/><b id="noteForm"></b></td>
            </tr>
        </table>
    </form>
</div>
<hr/>
<?php
require './element_FN/mod/userCls.php';
?>
<div class="title_user">Danh sách người dùng</div>
<div class="content_user">
    <?php
    $obj_User = new user();
    $list_User = $obj_User->UserGetAll();
    $l = count($list_User);
    ?>
    <p>Trong bảng có <b><?php echo $l; ?></b></p>
    <?php
    if ($l > 0) {
        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>Ngày Sinh</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Ngày đăng ký</th>
                    <th>Hoạt động</th>
                    <th>Edit</th>            
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_User as $v) {
                    ?>
                    <tr>
                        <td><?php echo $v->iduser; ?></td>
                        <td><?php echo $v->username; ?></td>
                        <td><?php echo $v->password; ?></td>
                        <td><?php echo $v->hoten; ?></td>
                        <td align="center">
                            <?php
                            if ($v->gioitinh == 0) {
                                ?>
                                <img class="iconimg" src="./img_FN/nu.png"/>
                                <?php
                            } else {
                                ?>
                                <img class="iconimg" src="./img_FN/nam.png"/>
                                <?php
                            }
                            ?>
                        </td>
                        <td><?php echo $v->ngaysinh; ?></td>
                        <td><?php echo $v->diachi; ?></td>
                        <td><?php echo $v->dienthoai; ?></td>
                        <td><?php echo $v->ngaydangky; ?></td>
                        <td align="center">
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                                if ($v->ability == 0) {
                                    ?>
                                    <a href="./element_FN/mUser/userAct.php?reqact=setlock&iduser=<?php echo $v->iduser; ?>&ability=<?php echo $v->ability; ?>">
                                        <img class="iconimg" src="./img_FN/lock.png"/>
                                    </a>                                
                                    <?php
                                } else {
                                    ?>
                                    <a href="./element_FN/mUser/userAct.php?reqact=setlock&iduser=<?php echo $v->iduser; ?>&ability=<?php echo $v->ability; ?>">
                                        <img class="iconimg" src="./img_FN/unlock.png"/>
                                    </a>                              
                                    <?php
                                }
                            } else {
                                if ($v->ability == 0) {
                                    ?>
                                    <img class="iconimg" src="./img_FN/lock.png"/>
                                    <?php
                                } else {
                                    ?>
                                    <img class="iconimg" src="./img_FN/unlock.png"/>
                                    <?php
                                }
                            }
                            ?>
                        </td>
                        <td align="center">
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                                ?>
                                <a href="./element_FN/mUser/userAct.php?reqact=deleteuser&iduser=<?php echo $v->iduser; ?>">
                                    <img class="iconimg" src="./img_FN/idelete.png"/>
                                </a>
                                <?php
                            } else {
                                ?>
                                <img class="iconimg" src="./img_FN/idelete.png"/>
                                <?php
                            }
                            ?>
                            <!--hình cập nhật-->
                            <?php
                            if (isset($_SESSION['USER']) and $v->username == 'admin') {
                                ?>
                                <img class="iconimg" src="./img_FN/update.png"/>
                                <?php
                            } else {
                                ?>
                    <temps class="btnupdate" value="<?php echo $v->iduser; ?>">
                        <img class="iconimg" src="./img_FN/update.png"/>
                    </temps>
                    <?php
                }
                ?>
                </td>
                <?php
            }
            ?> </tr>
            </tbody>
        </table>
        <?php
    }
    ?>
</div>

