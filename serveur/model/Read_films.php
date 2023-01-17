<?php include("Data_Base.php") ?>

<?php
function get_films($id){
  global $con;
  if($id){
   $query = 'SELECT * FROM films WHERE idf ='.$id;
  }else{
    $query = 'SELECT * FROM films';
  }    
  $result = mysqli_query($con,$query);
  mysqli_close($con);
   return $result;

}
function get_Id($strSql){
  global $con;
  
  if($strSql){
   $query = 'SELECT * FROM films '.$strSql;
   $result = mysqli_query($con,$query);
   $row = mysqli_fetch_array($result);

   if($row != []){
    return $row['idf'];
   }else{
    return 0;
   }

  }else{
    return 0;
  }    

}

function enregistrer_film($titre,$duree,$res){
  global $con;
  if($titre && $duree && $res){
    $id = get_Id("WHERE titre = '".$titre."' AND duree = ".$duree." AND realisateur = '".$res."'");
    if($id!=0){
      echo "Film No ".$id." existe deja!!";
    }else{
      $query = "INSERT INTO films(idf,titre,duree,realisateur) VALUES(0,'$titre',$duree,'$res')";
      mysqli_query($con,$query);
      
      echo "Film ".$titre." a été bien enregistré";
    } 
  }else{
    echo "remplir tous les champs!!";
  }
  mysqli_close($con);

}

function modifier_film($id,$titre,$duree,$res){
  global $con;
  if($titre && $duree && $res){
      $query = "UPDATE films SET titre = '".$titre."', duree = ".$duree.", realisateur = '".$res."' WHERE idf = ".$id;
      mysqli_query($con,$query);
      mysqli_close($con);
      
      echo "Film No ".$id." a été bien modifié";
     
  }else{
    echo "remplir tous les champs!!";
  }

}

function suprimer_film($id){
  global $con;
      $query = "DELETE FROM films WHERE idf = ".$id;
      mysqli_query($con,$query);
      mysqli_close($con);
      
      echo "Film No ".$id." a été bien suprimé";

}

?>