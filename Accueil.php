<?php 
    include("fonctions.php");
    $resultat=produit_a_vendre();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>
</head>
<body>
    <h1>PRODUIT A VENDRE</h1>
    <table>
        <tr>
            <th>nom membre</th>
            <th>produit à vendre</th>
        </tr>
        <?php while($donnee = mysqli_fetch_assoc($resultat)){?> 
            <tr>
                <td></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>