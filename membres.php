<?php

try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_admin;charset=utf8;port=5500', 'root', 'root'); // il faut préciser le port ici pour que ca fonctionne. Par défaut il doit, je pense, essayer de se connecter a Mariadb
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM membres');

session_start();

if (!$_SESSION['mdp']) {
    header(('Location:connect.php'));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Afficher les membres</title>
</head>

<body>
    <!-- afficher tous les membres -->
    <!-- boucle pour parcourir le tableau des utilisateurs -->
    <?php
    $recupUsers = $bdd->query('select * from membres');
    while ($user = $recupUsers->fetch()) {
    ?>
        <p><?= $user['pseudo']; ?><a href="bannier.php?id=<?= $user['id']; ?>"></a></p>
    <?php
    }
    ?>

</body>

</html>