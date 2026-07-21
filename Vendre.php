<?php
    include("fonctions.php");
    session_start();
    // $unknown=$_GET[""];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/style.css">
    <title>vente</title>
</head>
<body>
    <p><a href="Accueil.php" class="lien">page acceuil</a></p>
    <h1 class="title">QUE VOULEZ VOUS VENDRE?</h1>
    <form action="traitement_sale.php" method="get">
        <p>Prenom:<input type="text" name="prenom" value="Gloglo"></p>
        <p>Produit<input type="text" name="produit" value="bolognaise"></p>
        <p>Prix<input type="text" name="prix" value=8000></p>
        <p>quantite
                <select name="quantite">
                    <option value="">— Choisir —</option>
                    <?php  for ($i=0; $i<10 ;$i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
        </p>
        <p>categorie
            <select name="categorie" >
                <option value="">- Type -</option>
                <option value="plat">plat</option>
                <option value="boisson">boisson</option>
                <option value="snack">snack</option>
                <option value="dessert">dessert</option>
            </select>
        </p>
        <p>Date de disponibilite : <input type="date" name="date"></p>
        <p>Ajouter une photo:<input type="file" name="image"></p>
        <input type="submit" value="envoyer">
    </form>
</body>
</html>