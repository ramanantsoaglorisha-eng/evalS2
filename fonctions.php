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
        $sql="select m.nom as nom ,pm.id_membre as id,sum(prix_vente) from produit_membre pm join membre m on m.id_membre=pm.id_membre group by pm.id_membre;";
        return mysqli_query(dbconnect(),$sql);
    }
?>