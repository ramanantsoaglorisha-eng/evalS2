<?php
    include("fonctions.php");
    $numero_etu=$_GET["etu"];
    $_SESSION["etu"]=$numero_etu;
    $Etu=$_SESSION["etu"];
    if (isset($_SESSION["etu"])){
        $verifie_num = sign_in($numero_etu);
        if($verifie_num == 0){
            header("Location:inscription.php");
        }
        if($verifie_num > 0){
            header("Location:Accueil.php");
        }
    }


?>