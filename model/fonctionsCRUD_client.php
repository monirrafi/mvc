<?php include("connection.php") ?>

<?php
  function get_clients($email){
    global $db;
    $query = "SELECT * FROM client 
              WHERE email = :email";
    $statement = $db->prepare($query);
    $statement->bindValue(':email',$email);
    $statement->execute();
    $results = $statement->fetchAll();
    $statement->closeCursor();
    return $results;

  }

  function enregistrer_client($nom,$prenom,$email,$password){
    global $db;
    $count = 0;
    $query = "INSERT INTO client(id,nom,prenom,email,passWord) VALUES(
              :id,:nom,:prenom,:email,:password)";

    $statement = $db->prepare($query);
    $statement->bindValue(':id',0);
    $statement->bindValue(':nom',$nom);
    $statement->bindValue(':prenom',$prenom);
    $statement->bindValue(':email',$email);
    $statement->bindValue(':password',$password);
    if($statement->execute()){
      $count  = $statement->rowCount();
    }
    $statement->closeCursor();
    return $count;
    
  
  }
  
  function modifier_client($id,$nom,$prenom,$email,$password){
    global $db;
    $count = 0;
    $query = "UPDATE client SET nom = :nom, prenom = :prenom ,email = :email ,passWord = :password 
              WHERE id = :id";

    $statement = $db->prepare($query);
    $statement->bindValue(':id',$id);
    $statement->bindValue(':nom',$nom);
    $statement->bindValue(':prenom',$prenom);
    $statement->bindValue(':email',$email);
    $statement->bindValue(':password',$password);
    if($statement->execute()){
      $count  = $statement->rowCount();
    }
    $statement->closeCursor();
    return $count;
    
  
  }
  
  function suprimer_client($id){
    global $db;
    $count = 0;
        $query = "DELETE FROM client WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(':id',$id);
        if($statement->execute()){
          $count  = $statement->rowCount();
        }
        $statement->closeCursor();
        return $count;
      
  }
  
/*
  function get_clients($email){
    global $con;
    if($email){
     $query = "SELECT * FROM client WHERE email = '".$email."'";
     $result = mysqli_query($con,$query);
     return $result;

    }
    else{
      $query = 'SELECT * FROM client';
    }    
    //mysqli_close($con);
  
  }
            


function get_Id($strSql){
  global $con;
  
  if($strSql){
   $query = 'SELECT * FROM client '.$strSql;
   $result = mysqli_query($con,$query);
   $row = mysqli_fetch_array($result);

   if($row != []){
    return $row['id'];
   }else{
    return 0;
   }

  }else{
    return 0;
  }    

}

function enregistrer_client($nom,$prenom,$email,$password){
  global $con;
  if($nom && $prenom && $email && $password){
    $id = get_Id("WHERE email = '".$email."'");
    if($id!=0){
      return "client avec courriel ".$email." existe deja!!";
    }else{
      $query = "INSERT INTO client(id,nom,prenom,email,password) VALUES(0,'$nom','$prenom','$email','$password')";
      mysqli_query($con,$query);
      //mysqli_close($con);
      
      return "client avec courriel ".$email." a été bien enregistré";
    } 
  }else{
    return "remplir tous les champs!!";
  }

}

function modifier_client($id,$nom,$prenom,$email,$password){
  global $con;
  if($nom && $prenom && $email && $password){
      $query = "UPDATE client SET nom = '".$nom."', prenom = '".$prenom."', email = '".$email."', passWord = '".$password."' WHERE id = ".$id;
      mysqli_query($con,$query);
     // mysqli_close($con);
      
      return "client avec courriel ".$email." a été bien modifié";
     
  }else{
    return "remplir tous les champs!!";
  }

}

function suprimer_client($id){
  global $con;
      $query = "DELETE FROM client WHERE id = ".$id;
      mysqli_query($con,$query);
      //mysqli_close($con);
      
      return "client no ".$id." a été bien suprimé";

}
*/
?>