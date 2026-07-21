<?php
include("fonctions.php");
session_start();
$prenom=$_GET['prenom'];
$categorie=$_GET["categorie"];
$produit=$_GET["produit"];
$qtte=$_GET["quantite"];
$prix=$_GET["prix"];
$date_dipo=$_GET["date"];
$image = $_FILES['image'];

    $insere2 = vendre( $categorie , $produit , $prix );
if (isset($categorie) && isset($produit) && isset($qtte) && isset($prix) && isset($date_dipo)){
    $idCategorie=get_id_categorie($categorie);
    $insere2 = vendre($idCategorie,  $produit , $prix );
    $id_produit=get_id_produit($produit);
    $id_membre=get_id_membre($Etu);
    $vendre=vendre_all($id_produit,$id_membre,$qtte,$prix ,$date_dipo);
    echo "hihoooo";
    echo "<pre>";
    print_r($image);
}    
else{
    echo "nooooo";
    }
?>

