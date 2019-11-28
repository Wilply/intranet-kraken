<?php
    require("../processing/admin_session.php");
    require("users.php");
    if ($_POST['login'] == 'services@kraken2020.net') {
        echo 0;
        exit();
    }
    echo update_is_admin($_POST['login']);
?>