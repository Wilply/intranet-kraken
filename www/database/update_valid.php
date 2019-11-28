<?php
    require("../processing/admin_session.php");
    require("users.php");
    if ($_POST['login'] == 'services@kraken2020.net') {
        echo 0;
        exit();
    }
    echo $_POST['login'];
    echo update_is_valid($_POST['login']);
?>