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
        <div class="account_info">
            <table>
            <?php
                require('database/users.php');
                $user = get_user($_SESSION['login']);
                if ($user['user_is_admin']) {
                    $admin = "oui";
                } else {
                    $admin = "non";
                }
                echo '<tr><td>Nom</td><td>'.$user['user_nom'].'</td></tr>'.
                '<tr><td>Prenom</td><td>'.$user['user_prenom'].'</td></tr>'.
                '<tr><td>Pole</td><td>'.$user['user_pole'].'</td></tr>'.
                '<tr><td>mail</td><td>'.$user['user_login'].'</td></tr>'.
                '<tr><td>Administrateur?</td><td>'.$admin.'</td></tr>';
            ?></table>
        </div>
        <br>
        <div class="change_pass">
                <h3>Changement de mot de passe :</h3>
                <form action="/processing/change_password.php" method="post" onsubmit="return checkpassword(this);">
                    Ancien mot de passe :<br>
                    <input type="password" required name="old_pass"><br>
                    Nouveau mot de passe :<br>
                    <input type="password" required name="new_pass"><br>
                    Confirmer mot de passe :<br>
                    <input type="password" required name="new_pass_2"><br>
                    <input type="submit" value="Envoyer">
                </form>
        </div>
    </div>
    </div>
</body>

<script type="text/javascript" language="JavaScript">
function checkpassword(theForm) {
	if (theForm.new_pass.value != theForm.new_pass_2.value)
	{
		alert('Les mots de passes sont differents');
		return false;
	} else {
		return true;
	}
}
</script> 