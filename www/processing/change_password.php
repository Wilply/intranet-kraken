<?php
    require('session.php');
    require('../database/users.php');
    $user = get_user($_SESSION['login']);
    if ($user['user_is_admin']) {
        if ($_POST['login']) {
            $login = $_POST['login'];
        } else {
            $login = $_SESSION['login'];
        }
        if (!get_user($login)) {
            $error = 2;
        } else {
            $error = 0;
            update_password($login, $_POST['new_pass']);
        }
    } else {
        $login = $_SESSION['login'];
        echo $_POST['old_pass'];
        echo $user['password'];
        if (password_verify($_POST['old_pass'], $user['user_password'])) {
            $error = 0;
            update_password($login, $_POST['new_pass']);
        } else {
            $error = 1;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../styles.css">
	<title>Intranet Kraken</title>
</head>
<body>
    <?php if ($error == 0) { ?>
        <div class="info">
        Mot de passe mis a jour avec succés<Br><Br><Br><Br>
        <button onclick="location.href = '../'">Acceuil</button>
        </div>
    <?php } elseif ($error == 1) { ?>
        <div class="erreur">
        Les mots de passe ne correspondent pas<Br><Br><Br><Br>
        <button onclick="location.href = '../account.php'">Acceuil</button>
        </div>
    <?php } elseif ($error == 2) { ?>
        <div class="erreur">
        Utilisateur inconnus<Br><Br><Br><Br>
        <button onclick="location.href = '../gestion.php'">Acceuil</button>
        </div>
    <?php } else { ?>
        <div class="erreur">
        Ces identifiant n'existent pas ou sont faux<Br><Br><Br><Br>
        <button onclick="location.href = '../account.php'">Inscription</button>
        </div>
    <?php } ?>
</body>
</html>