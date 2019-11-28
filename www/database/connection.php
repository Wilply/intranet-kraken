<?php
    $host = 'database'; //url de la base de donnée
    $user = 'root';
    $password = 'azerty123';
    $bdd_name = 'kraken'; //nom de la base de donnée
    try {
        $bdd = new PDO('mysql:host='.$host.';charset=utf8;', $user, $password);
        $bdd->exec('USE '.$bdd_name);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
?>
