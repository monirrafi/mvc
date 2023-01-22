<?php    $msg = "";
   if(isset($_GET['msg'])){
       $msg = $_GET['msg'];
   }
   function fonction_alert($message) {
    echo "<script>alert('$message');</script>";
}

?>

<?php
   include('model/fonctionsCRUD_client.php');
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
                }else{
                    $messageErreur = "le courrriel ".$email." n'existe pas ";
                    include('MessageErreur.php');
                }
                break;
            case 'enregistrer':
                if($nom && $prenom && $email && $password){
                    $count = enregistrer_client($nom,$prenom,$email,$password);
                    $msg = 'enregistrer '.$email;
                    fonction_alert($msg);
                    include('view/enregistrer.php');
                }
                if(!$email){
                    $messageErreur = "le courrriel ".$email." n'existe pas ".$nom.$prenom.$email.$password;
                    include('view/MessageErreur.php');
                }else{
                    include('view/enregistrer.php');

                }
                break;
            case 'modifier':
                if($id && $nom && $prenom && $email && $password){
                    $count = modifier_client($id,$nom,$prenom,$email,$password);
                    $msg = 'modifier '.$email;
                    fonction_alert($msg);
                    include('view/enregistrer.php');
                            }
                if(!$email){
                    $messageErreur = "le courrriel ".$email." n'existe pas ";
                    include('view/MessageErreur.php');
                }else{

                }
                break;
            case 'suprimer':
                if($id){
                    $count = suprimer_client($id);
                    $msg = 'suprimer '.$id;
                    fonction_alert($msg);
                    include('view/enregistrer.php');
                }else{
                    $messageErreur = "le courrriel ".$email." n'existe pas ";
                    include('view/MessageErreur.php');
                }
                break;
            default:
                include('view/enregistrer.php');
        }

?>

