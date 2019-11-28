<?php require('./processing/session.php') ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./styles.css">
	<title>Intranet Kraken</title>
</head>
<body>
	<?php require("menu.php") ?>
    <div class="main">
        <table class="user_table">
            <tr class="user_table_head">
                <th>Nom</th>
                <th>Prenom</th>
                <th>Pole</th>
                <th>E-Mail</th>
                <th>Valide?</th>
                <th>Admin?</th>
            </tr>
            <?php
                require('./database/users.php');
                $data = list_user();
                foreach($data as $user) {
                    $valid_state = "";
                    if ($user['user_is_valid']) {
                        $valid_state = "checked";
                    }
                    $admin_state = "";
                    if ($user['user_is_admin']) {
                        $admin_state = "checked";
                    }
                    echo("<tr class='user_table_body'>"
                    ."<td>".$user['user_nom']."</td>"
                    ."<td>".$user['user_prenom']."</td>"
                    ."<td>".$user['user_pole']."</td>"
                    ."<td>".$user['user_login']."</td>"
                    ."<td>".'<input type="checkbox" name="is_valide" id="'.$user['user_login'].'" onchange="update_valid(this)"'.$valid_state.'>'."</td>"
                    ."<td>".'<input type="checkbox" name="is_admin" id="'.$user['user_login'].'" onchange="update_admin(this)"'.$admin_state.'>'."</td>"
                ."</tr>");
                }
            ?>
        </table>
    </div>
</body>

<script src="./script.js"></script>