<?php
       $created = filter_input(INPUT_GET,'created', FILTER_SANITIZE_STRING);
       $updated = filter_input(INPUT_GET,'updated', FILTER_SANITIZE_STRING);
       $deleted = filter_input(INPUT_GET,'deleted', FILTER_SANITIZE_STRING);

       if($created){
            echo "enr";        
       }
       if($updated){
            echo "mod";        
       }
       if($deleted){
            echo "sup";        
       }


?>