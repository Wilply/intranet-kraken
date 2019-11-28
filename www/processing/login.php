<?php
    session_start();
    require('../database/connection.php');
    require('../database/users.php');
    $user = get_user(strtolower($_POST['login']));
    if (password_verify($_POST['password'], $user['user_password']) && $user['user_is_valid']) {
        $_SESSION['login'] = $user['user_login'];
        $_SESSION['is_admin'] = $user['user_is_admin'];
        header('Location: ../');
        exit();
    } elseif (password_verify($_POST['password'], $user['user_password']) && !$user['user_is_valid']) {
        $error = 1;
    } else {
        $error = 2;
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
    <?php if ($error == 1) { ?>
        <div class="info">
        Ton compte n'a pas été validé. Demande au pole numerique.<Br><Br><Br><Br>
        <button onclick="location.href = '../'">Acceuil</button>
        </div>
    <?php } else { ?>
        <div class="erreur">
        Ces identifiant n'existent pas ou sont faux<Br><Br><Br><Br>
        <button onclick="location.href = '../register.php'">Inscription</button>
        </div>
    <?php } ?>
</body>
</html>