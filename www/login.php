<?php     
session_start();
    if ($_SESSION['login']) {
        header('Location: ./');
    } 
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./styles.css">
	<title>Intranet Kraken</title>
</head>
<body>
    <div class="login">
        <form action="./processing/login.php" method="post" class="register_form">
            <h1>Connexion</h1>
            Login<Br>
            <input type="text" name="login" placeholder="Email de l'ecole" required id="input_97"><br><Br>
            Mot de passe <Br>
            <input type="password" name="password" placeholder="Mot de passe" required id="input_97"><br><Br><Br>
            <div class="register_foot">
                <input type="button" onclick="location.href='register.php'" value="Inscription"><input type="submit" value="Se connecter">
            </div>
            <a href="forgot_password.php">Mot de passe oublié</a>
        </form>
    </div>
</body>
</html>