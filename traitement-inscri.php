<?php
    include("fonctions.php");

    $num=$_GET["etu_insere"];
    $name=$_GET["nom"];
    
    if (isset($num) && isset($name)){
        $verifie_num = inscription($num,$name);
            header("Location:Accueil.php");
    }    
    else{
        header("Location:inscription.php");
        }

?>