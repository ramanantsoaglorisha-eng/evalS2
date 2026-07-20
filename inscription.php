<?php
    include("fonctions.php");
    $num=$_GET["etu"];
    $name=$_GET["nom"];
    if (isset($num && $name)){
        $verifie_num = inscription($num,$name);
            header("Location:Accueil.php");
    }    
    else{
        header("Location:inscrription.php");
        }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inscription" method="get">
        <p>ETU<input type="text" name="etu" ></p>
        <p>Nom<input type="text" name="nom" ></p>
        <p><input type="submit" value="Cliquer"></p>
    </form>
</body>
</html>