<?php
session_start();
if(!$_SESSION['mdp']){
header(('Location:connect.php'));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <a href="membres.php">Afficher tous les membres</a>
    
</body>
</html>
