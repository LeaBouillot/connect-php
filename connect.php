<?php
//session qui va permettre echanger dans tout les pages
session_start();
if (isset($_POST['valider'])) {
    if (!empty($_POST['pseudo']) and !empty($_POST['mdp'])) {
        $pseudo_defaut = "admin";
        $mdp_defaut = "admin1234";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);
        if ($pseudo_saisi == $pseudo_defaut && $mdp_saisi == $mdp_defaut) {
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location: index.php'); // redirection vers la page index.php si mdp est correct
        } else {
            echo "Pseudo ou mot de passe incorrect";
        }
    } else {
        echo "Veuillez remplir tous les champs";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Espace de connection admin</title>

</head>

<body>
    <div>
        <form method="POST" action="">
            <div>
                <input type="text" placeholder="Etrez votre nom" name="pseudo" />
            </div>
            <div>
                <input type="text" placeholder="Etrez votre password" name="mdp" />
            </div>
            <div>
                <input type="submit" name="valider" />
            </div>
        </form>
    </div>
</body>

</html>