<!DOCTYPE html>
<html>

	  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
      <title> login </title>
      <link rel="stylesheet" type="text/css" href="stylesheet.css">
	  </head>
    <body class="backgroud">
      <div class="login_div_connexion">
        <div class="login_head">
          Connexion
        </div>
        <div class="login_input">
          <form method="POST" action="connexion_processing.php">
            Nom d'utilisateur:<br>
            <input type="text" name="input_login" class="login_input_field_connexion" placeholder="Nom d'utilisateur" autofocus required><br>
            Mot de passe:<br>
            <input type="Password" name="input_password" class="login_input_field_connexion" placeholder="Mot de passe" required ><br>
        </div>
        <div class="login_feet">
            <input type="submit" name="Connexion">
          </form>
        </div>
      </div>
  </body>
</html>