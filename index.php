
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bán Xe</title>
        <link type="text/css" rel="stylesheet" href="administrator/mycss/mycss.css"/>
        <script type="text/javascript" src="administrator/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="administrator/js/jscript.js"></script>
    </head>
    <body>
        <div id="main_Content">
            <div id="top_div">

            </div>
            <div id="left_div">
                <?php
                require './administrator/elements/left.php';
                ?>
            </div>
            <div id="center_div">
                <?php
                require './administrator/elements/center.php';
                ?>
            </div>
            <div id="right_div">
                 <?php
                require './administrator/elements/right.php';
                ?>
            </div>
            <div id="bottom_div">

            </div>
        </div>
    </body>
</html>
<!--<html>
    <head>
        <meta charset="UTF-8">
        <title>Bán Xe</title>
        <link type="text/css" rel="stylesheet" href="public_files/pmycss.css"/>
    </head>
    <body>
        <div id="lvOne"></div>
        <div id="lvTwo"><?php require './apart/menuLoaihang.php'; ?></div>
        <div id="lvThree">
            <?php
            if (!isset($_GET['reqHanghoa'])) {
                require './apart/viewListLoaiHang.php';
            } else {
                require './apart/viewHangHoa.php';
            }
            ?>
        </div>
    </body>-->

</html>
