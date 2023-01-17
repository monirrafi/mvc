<?php require_once('Entete.php') ?>
    <h2>SUPRESSION D'UN FILM</h2> 
<?php
        $id = $_POST['id'];
        if(array_key_exists('btnOui', $_POST)) {
           suprimer_film($id);
        }
        else if(array_key_exists('btnNon', $_POST)) {
            echo "Film No ".$id." n'a pas été bien suprimé";
        }

?>
<?php require_once('Enpieds.php') ?>
