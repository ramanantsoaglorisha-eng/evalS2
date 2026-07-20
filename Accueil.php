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
    <p><a href="Vendre.php" class="lien">que voulez-vous vendre?</a></p>
    <p><a href="Mes_ventes.php" class="lien">vente par membre</a></p>
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
            <tr>
                <td><?= $donnee['nom_membre']; ?></td>
                <td><?= $donnee['nom_produit']; ?></td>
                <td><?= $donnee['prix']; ?></td>
                <form action="get_vente.php" method="get">
                    <input type="hidden" value="<?= $donnee['pmi'];?>" name="id">
                    <td><input type="text" name="nb"></td>
                    <td><input type="submit" value="acheter"></td>
                </form>
            </tr>
        <?php } ?>
    </table>
</body>
</html>