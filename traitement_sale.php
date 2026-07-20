<?php
include("fonctions.php");
session_start();
$categorie=$_GET["categorie"];
$produit=$_GET["produit"];
$qtte=$_GET["quantite"];
$prix=$_GET["prix"];
$date_dipo=$_GET["date"];

if (isset($categorie) && isset($produit) && isset($qtte) && isset($prix) && isset($date_dipo)){
    $insere2 = vendre( $categorie , $produit , $prix );
    $id_produit=get_id_produit($produit);
    $id_membre=get_id_membre($Etu);
    $vendre=vendre_all($id_produit,$id_membre,$qtte,$prix ,$date_dipo);
        header("Location:Accueil.php");
}    
else{
    header("Location:Vendre.php");
    }
?>
