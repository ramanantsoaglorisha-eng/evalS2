<?php
    include("fonctions.php");
    $resultat=mes_vente();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/style.css">
    <title>mes ventes</title>
</head>
<body>
    <p><a href="Accueil.php" class="lien">page acceuil</a></p>
    <h1 class="title">VENTE PAR MEMBRE</h1>
    <table>
        <tr>
            <th>nom</th>
            <th>prix_total</th>
        </tr>
        <?php while($donnee = mysqli_fetch_assoc($resultat)){?> 
            <tr>
                <td><?= $donnee['nom'];?></td>
                <td><?= $donnee['prix_total'];?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>