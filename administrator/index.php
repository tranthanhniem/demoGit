<?php
session_start();
?>
<html>
    <head>
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
                require './elements/left.php';
                ?>
            </div>
            <div id="center_div">
                <?php
                require './elements/center.php';
                ?>
            </div>
            <div id="right_div">
                <?php
                require './elements/right.php';
                ?>
            </div>
            <div id="bottom_div">

            </div>
        </div>
        <div id="signoutbutton">
            <a href="elements/mUser/userAct.php?reqact=userlogout">
                <img src="img/logout.png" class="iconbutton"/>
            </a>
        </div
    </body>
</html>
