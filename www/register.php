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
    <div class="register">
        <form action="./processing/register.php" method="post" class="register_form" onsubmit="return checkEmail(this);">
            <h1>Inscription</h1>
            Nom<Br>
            <input type="text" name="nom" placeholder="Nom" required id="input_50"><br><Br>
            Prénom<Br>
            <input type="text" name="prenom" placeholder="Prénom" required id="input_50"><br><Br>
            Pôle<Br>
            <select name="pole" required id="input_50">
                <option value="" selected> -- ton pole -- </option>
                <option value="communication">Communication</option>
                <option value="entreprise">Relation Entreprise</option>
                <option value="soiree">Soirée</option>
                <option value="prevention">Prévention</option>
                <option value="seculog">SecuLog</option>
                <option value="pres-vp">Prez / VP</option>
                <option value="tresorerie">Trésorerie</option>
                <option value="numerique">Numérique</option>
                <option value="voyage-swei">Voyage - SWEI</option>
                <option value="tema">T&MA</option>
                <option value="dev-durable">Dev. Durable</option>
                <option value="ritz">RITZ</option>
                <option value="stand">Stand</option>
                <option value="secretariat">Secrétariat</option>
                <option value="pougne">Pougne</option>
            </select><Br><Br>
            E-mail (pour quand vous allez perdre vos mdp)<Br>
            <input type="text" name="mail" placeholder="E-Mail de l'école" required id="input_40">
            @
            <select name="ecole" required id="input_50">
                <option value="" selected> -- ecole -- </option>
                <option value="telecom-sudparis.eu">telecom-sudparis.eu</option>
                <option value="imt-bs.eu">imt-bs.eu</option>
            </select><br><Br>
            Mot de passe <Br>
            <input type="password" name="password" placeholder="Mot de passe" required id="input_80"><br><Br>
            Confirmation du mot de passe<Br>
            <input type="password" name="password2" placeholder="Confirmation mot de passe" required id="input_80"><br><br><br>
            <div class="register_foot">
                <input type="button" onclick="location.href='login.php'" value="Se connecter"><input type="submit" value="S'inscrire">
            </div>
        </form>
    </div>
</body>
</html>

<script type="text/javascript" language="JavaScript">
function checkEmail(theForm) {
	if (theForm.password.value != theForm.password2.value)
	{
		alert('Les mots de passes sont differents');
		return false;
	} else {
		return true;
	}
}
</script> 