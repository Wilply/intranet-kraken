<?php require('./processing/session.php') ?>
    <div class="menu_bar">
        <a id="logo" class="menu_button">KRAKEN 2020</a>
        <a href="./" class="menu_button">Acceuil</a>
        <div >
            <a class="menu_button">Aperos Listeux</a>
            <div class="menu_content">
                <a href="./bouffe_listeux.php" class="menu_button">Bouffe Listeux</a>
                <a href="./bourre_listeux.php" class="menu_button">Bourre Listeux</a>
                <a href="./fumme_listeux.php" class="menu_button">Fumme Listeux</a>
            </div>
        </div>
        <span class="menu_middle"></span>
        <?php
        session_start();
        if ($_SESSION['is_admin']) { ?>
        <div>
            <a id="menu_admin" class="menu_button">Administration</a>
            <div id="menu_content" class="menu_content">
                <a id="menu_admin" href="./admin_users.php" class="menu_button">Gestion Utilisateur</a>
                <a id="menu_admin" href="./admin_password.php" class="menu_button">Reset Mot de Passe</a>
            </div>
        </div>
        <?php } ?>
        <div >
            <a id="menu_account" class="menu_button"><?php session_start(); echo $_SESSION['login']; ?></a>
            <div class="menu_content">
                <a id="menu_account" href="./account.php" class="menu_button">Mon compte</a>
                <a id="menu_account" href="./processing/logout.php" class="menu_button">Se Déconnecter</a>
            </div>
        </div>
    </div>