<?php
    include("fonctions.php");
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
    <h1 class="title">produit à vendre</h1>
    <table>
        <tr>
            <th>nom membre</th>
            <th>nom du produit</th>
            <th>nb</th>
            <th>acheter</th>
        </tr>
        <?php foreach ($resultat as $donnee){?> 
            <tr>
                <td><?= $donnee['nom_membre']; ?></td>
                <td><?= $donnee['nom_produit']; ?></td>
                <td>quantité</td>
                <td>acheté</td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>