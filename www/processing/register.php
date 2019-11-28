<?php
    function register($nom, $prenom, $pole, $login, $password) {
        require('../database/connection.php');
        $query = $bdd->prepare("INSERT INTO users(user_nom, user_prenom, user_pole, user_login, user_password) VALUES (:nom, :prenom, :pole, :login, :password)");
        $query->bindParam(':nom',$nom);
        $query->bindParam(':prenom',$prenom);
        $query->bindParam(':pole',$pole);
        $query->bindParam(':login',$login);
        $query->bindParam(':password',$password);
        try {
            $query->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    require('../database/users.php');
    if (get_user(strtolower($_POST["mail"]."@".$_POST["ecole"]))) {
        $error = 2;
    } else {
        $type = array("communication", "entreprise", "soiree", "tresorerie", "numerique", "voyage-swei", "tema", "dev-durable", "ritz", "stand", "secretariat", "pougne");
        if (!in_array($_POST["pole"], $type)) {
            echo 'erreur pole';
            $error = 1;
        } elseif (preg_match('/.+\..+@(imt\-bs|telecom\-sudparis)\.eu/', strtolower($_POST["mail"]."@".$_POST["ecole"]))) {
            $mail_full = preg_grep('/.+\..+@(imt\-bs|telecom\-sudparis)\.eu/', array(strtolower($_POST["mail"]."@".$_POST["ecole"])))[0];
            register($_POST["nom"], $_POST["prenom"], $_POST["pole"], $mail_full, password_hash($_POST["password"], PASSWORD_BCRYPT));
            $error = 0;
        } else {
            echo 'erreur regex';
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
    <?php
    if ($error == 0) { ?>
        <div class="info">
        T'es bien enregistré, maintenant il faut que ton compte soit validé. Demande au pole numerique.<Br><Br><Br><Br>
        <button onclick="location.href = '../login.php'">Acceuil</button>
        </div>
    <?php } elseif($error == 1) { ?>
        <div class="erreur">
        Erreur : Arrete d'essayer de niquer le site, casse toi<Br><Br><Br><Br>
        <button onclick="location.href = '../login.php'">Acceuil</button>
        </div>
    <?php } elseif ($error == 2) { ?>
        <div class="erreur">
        ERREUR, email déjà utilisé. T'as encore oublié ton mot de passe hein ...<Br><Br><Br><Br>
        <button onclick="location.href = '../register.php'">Acceuil</button>
        </div>
    <?php } ?>
</body>
</html>