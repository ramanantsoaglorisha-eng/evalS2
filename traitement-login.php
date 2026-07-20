<?php
    include("fonctions.php");
    $numero_etu=$_GET["etu"];
    
    if (isset($numero_etu)){
        $verifie_num = sign_in($numero_etu);
        if($verifie_num == 0){
            header("Location:inscription.php");
        }
        if($verifie_num > 0){
            header("Location:Accueil.php");
        }
    }


?>