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
	<link rel="stylesheet" type="text/css" href="../styles.css">
	<title>Intranet Kraken</title>
</head>
<body>
    <div class="login">
        <form action="./processing/forgot_password.php" method="post" class="register_form">
            <h1>Mot de passe oublié</h1>
            Login<Br>
            <input type="text" name="login" placeholder="Email de l'ecole" required id="input_97"><br><Br>
            <div class="register_foot">
                <input type="button" onclick="location.href='/'" value="Acceuil"><input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
</body>
</html>