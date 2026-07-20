<?php
    include("fonctions.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/style.css">
    <title>Document</title>
</head>
<body>
    <h1 class="title">INSCRIPTION</h1>
    <form action="traitement-inscri.php" method="get">
        <p class="etu">ETU<input type="text" name="etu_insere" ></p>
        <p>Nom<input type="text" name="nom" ></p>
        <p><input type="submit" value="Cliquer"></p>
    </form>
</body>
</html>