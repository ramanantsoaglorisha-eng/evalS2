<?php
    include("fonctions.php");
    session_start();
    $pmi=$_GET['id'];
    $nb=$_GET['nb'];
    echo $pmi;
    echo $nb;
    $result=inserer_vente($pmi, $nb);
    $_SESSION['pmi']=$pmi;
    $_SESSION['nb']=$nb;
    if (isset($_SESSION['pmi']) && isset($_SESSION['nb']) ){
        echo "hehoooouu";   
    }
    else {
        echo "nooooo";
    }    
?>