<?php
    $bdd_host = 'database'; //url de la base de donnée
    $bdd_user = 'root';
    $bdd_password = 'azerty123';
    $bdd_name = 'kraken'; //nom de la base de donnée
    try {
        $bdd = new PDO('mysql:host='.$bdd_host.';charset=utf8;', $bdd_user, $bdd_password);
        $bdd->exec('USE '.$bdd_name);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
?>
