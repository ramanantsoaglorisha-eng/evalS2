<?php
    include("fonctions.php");
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="traitement-login.php" method="get">
        <p>ETU<input type="text" name="etu" ></p>
        <p><input type="submit" value="Cliquer"></p>
    </form>
    
</body>
</html>