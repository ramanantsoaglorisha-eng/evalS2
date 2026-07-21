<?php
    include_once("connection.php");
    function get_all_lines($sql){
        $req= mysqli_query(dbconnect(),$sql);
        if(! $req){
            die("Erreur SQL " . mysqli_error(dbconnect()));
        }
        $result = array();
        while ($line = mysqli_fetch_assoc($req)){
            $result[]=$line;
        }
        mysqli_free_result($req);
        return $result;
    }

    function get_one_line($sql){
        $req= mysqli_query(dbconnect(),$sql);
        if(! $req){
            die("Erreur SQL " . mysqli_error(dbconnect()));
        }
        $result=mysqli_fetch_assoc($req);
        mysqli_free_result($req);
        return $result;        
    }

    function sign_in($itu){
        $sql="SELECT membre.nom from membre where numero_etu='%s'";
        $sql= sprintf($sql,$itu);

        $req = mysqli_query(dbconnect(),$sql );
        $verify=mysqli_num_rows($req);

        if($verify>0){
            return 1;
        }
        if($verify<1){
            return 0;
        }
    }
    function inscription($itu,$nom){
        $sql="INSERT INTO membre (nom, numero_etu) VALUES ('$nom', '$itu')";
        $req = mysqli_query(dbconnect(),$sql );

    }

    function produit_a_vendre(){
        $sql="SELECT m.nom as nom_membre, p.nom as nom_produit , p.prix_reference as prix, pm.id_produit_membre as pmi from membre m join produit_membre pm on pm.id_membre=m.id_membre join produit p on p.id_produit=pm.id_produit;";
        return get_all_lines($sql);
    }

    function inserer_vente($id, $nb){
        $sql="INSERT INTO vente (id_produit_membre, quantite) VALUES ($id, $nb);";
        return mysqli_query(dbconnect(),$sql);
    }

    function quant_dispo($nb){
        $sql="select quantite_dispo from produit_membre where id_produit_membre=$nb;";
        return mysqli_query(dbconnect(),$sql);
    }

    function mes_vente(){
        $sql="select m.nom as nom ,pm.id_membre as id,sum(prix_vente) as prix_total from produit_membre pm join membre m on m.id_membre=pm.id_membre group by pm.id_membre;";
        return get_one_line($sql);
    }

    //insere dans categorie
    function get_id_categorie($categorie){
        $sql="SELECT id_categorie from categorie where nom_categorie='%s'";
        $sql=sprintf($sql,$categorie);
        return get_one_line($sql);
    }

    function vendre($id_cate  ,$produit ,$prix  ){
        // $sql1="INSERT INTO categorie(nom_categorie) VALUES ('$categorie') ";
        $sql2="INSERT INTO produit(produit,id_categorie, prix_reference) VALUES ('$produit','$id_cate','$prix') ";

        $req2 = mysqli_query(dbconnect(),$sql2);

    }

    function get_id_produit($produit){
        $sql="SELECT id_produit from produit where nom='%s'";
        $sql=sprintf($sql,$produit);
        return get_one_line($sql);
    }

    function get_id_membre($num){
        $sql="SELECT id_membre from membre where numero_etu='$num'";
        return get_one_line($sql);
    }

    function get_nom_membre($num){
        $sql="SELECT nom from membre where numero_etu='$num'";

    }

    function vendre_all($id_produit,$id_membre,$qtte,$prix ,$date_dipo){
        $sql="INSERT INTO produit_membre(id_produit, id_membre, prix_vente, date_dispo) VALUES ('$id_produit','$id_membre','$qtte','$prix','$date_dispo')";
        $req1 = mysqli_query(dbconnect(),$sql );
    }
?>