<html>
<head>
    <meta charset="UTF-8">
    <title>ADMIN KRAKEN</title>
</head>
<?php
$host_name = 'db5000220656.hosting-data.io';
$database = 'dbs215438';
$user_name = 'dbu183369';
$password = 'Rjrxzecx19!';
$connect = mysqli_connect($host_name, $user_name, $password, $database);

if (mysqli_connect_errno()) {
    die('<p>La connexion au serveur MySQL a échoué: '.mysqli_connect_error().'</p>');
} else {
    echo '<p>Connexion au serveur MySQL établie avec succès.</p >';
}
?>
<body>
    <h1 align="center">PAGE DE CONNEXION ADMIN KRAKEN</h1>

    <form name="connexion" method="post">
        <fieldset>
            <legend>Connexion</legend>
            <input type="text" name="id" placeholder="Identifiant de connexion" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <input type="submit" value="Envoyer" action="">
            <input type="reset" value="Annuler">
        </fieldset
    </form>
<br>
<br>
    <form name="creation" method="post">
        <fieldset>
            <label>Création de compte</label>
            <p>Formulaire de création de compte</p>
            <input type="text" name="pseudo">
            <input type="password" name="creamdp">
            <input type="submit" value="Envoyer" action="">
            <input type="reset" value="Annuler">
        </fieldset>
    </form>
</body>
</html>
