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
    <div class="change_pass">
                <h3>Changement de mot de passe :</h3>
                <form action="/processing/change_password.php" method="post" onsubmit="return checkpassword(this);">
                    Login :<br>
                    <input type="text" required name="login"><br>
                    Nouveau mot de passe :<br>
                    <input type="password" required name="new_pass"><br>
                    Confirmer mot de passe :<br>
                    <input type="password" required name="new_pass_2"><br>
                    <input type="submit" value="Envoyer">
                </form>
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