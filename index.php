
<?php
   include('model/fonctionsCRUD_client.php');

       // $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_STRING);
        $nom = filter_input(INPUT_POST,'nom', FILTER_SANITIZE_STRING);
        $prenom = filter_input(INPUT_POST,'prenom', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING);
        
        $action = filter_input(INPUT_POST,'action', FILTER_SANITIZE_STRING);
        if(!$action){
            $action = filter_input(INPUT_GET,'action', FILTER_SANITIZE_STRING);
                if(!$action){
                    $action="crud";
                }
            }
        $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_STRING);
        if(!$email){
            $email = filter_input(INPUT_GET,'email', FILTER_SANITIZE_STRING);
        }
        $id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_STRING);
        if(!$id){
            $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_STRING);
        }

        switch($action){
            case 'lister':
                if($email){
                    $results = get_clients($email);
                    include('view/modifier.php');
                }
                break;
            case 'enregistrer':
                if($nom && $prenom && $email && $password){
                    $count = enregistrer_client($nom,$prenom,$email,$password);
                    header("Location :?action=enregistrer&email={$email}&created={$count}");
                    include('view/enregistrer.php');
                }else{
                    
                }
                break;
            case 'modifier':
                if($id && $nom && $prenom && $email && $password){
                    $msg = modifier_client($id,$nom,$prenom,$email,$password);
                    header("Location :?action=modifier&email={$email}&updated={$msg}");
                }
                include('view/modifier.php');
                break;
            case 'suprimer':
                if($id){
                    $msg = suprimer_client($id);
                    header("Location :?action=modifier&email={$email}&deleted={$msg}");
                }
                include('view/modifier.php');
                break;
            default:
                include('view/enregistrer.php');
        }

?>
