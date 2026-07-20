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
   
        $sql="select m.nom as nom_membre, p.nom as nom_produit, p.prix_reference as prix from membre m join produit_membre pm on pm.id_membre=m.id_membre join produit p on p.id_produit=pm.id_produit;";
        return get_all_lines($sql);
    }

    function vendre( $categorie , $produit ,$prix  ){
        $sql1="INSERT INTO categorie(nom_categorie) VALUES ('$categorie') ";
        $sql2="INSERT INTO produit(produit,prix_reference) VALUES ('$produit','$prix') ";

        // $sql="INSERT INTO produit_membre(nom_categorie) VALUES ('$categorie') ";
        $req1 = mysqli_query(dbconnect(),$sql1 );
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
    function vendre_all($id_produit,$id_membre,$qtte,$prix ,$date_dipo){
        $sql="INSERT INTO produit_membre(id_produit, id_membre, prix_vente, date_dispo) VALUES ('$id_produit','$id_membre','$qtte','$prix','$date_dispo')";
        $req1 = mysqli_query(dbconnect(),$sql );

    }
?>