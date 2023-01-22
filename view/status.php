<?php
       $created = filter_input(INPUT_GET,'created', FILTER_SANITIZE_STRING);
       $updated = filter_input(INPUT_GET,'updated', FILTER_SANITIZE_STRING);
       $deleted = filter_input(INPUT_GET,'deleted', FILTER_SANITIZE_STRING);

       if($created){
          $nom = filter_input(INPUT_GET,'nom', FILTER_SANITIZE_STRING);
          $prenom = filter_input(INPUT_GET,'prenom', FILTER_SANITIZE_STRING);
            echo "le client".$nom." ".$prenom." a ete ajoute avec succes" ;        
     }
       if($updated){
         echo "le client".$nom." ".$prenom." a ete modifie avec succes" ;         
       }
       if($deleted){
          echo "le client ".$nom." ".$prenom." a ete suprime avec succes" ;        
     }


?>