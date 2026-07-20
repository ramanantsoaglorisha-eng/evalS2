<?php
    include("fonctions.php");
    session_start();
    $resultat=produit_a_vendre();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/style.css">
    <title>accueil</title>
</head>
<body>
    
    <button><a href="Vendre.php" value="Aller vendre"></a></button>
    
    <h1 class="title">PRODUIT A VENDRE</h1>
    <table>
        <tr>
            <th>nom membre</th>
            <th>nom du produit</th>
            <th>prix</th>
            <th>quantité</th>
            <th>acheter</th>
        </tr>
        
        <?php foreach($resultat as $donnee){?> 
        <form action="Vendre.php" method="get">
            <tr>
                <td><?= $donnee['nom_membre']; ?></td>
                <td><?= $donnee['nom_produit']; ?></td>
                <td><?= $donnee['prix']; ?></td>
                <td><input type="number"></td>
                <td><input type="submit" value="acheter"></td>
            </tr>
        </form>
        <?php } ?>
    </table>
</body>
</html>