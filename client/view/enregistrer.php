<?php require_once('Entete.php') ?>
    <h2>ENREGISTREMENT D'UN FILM</h2> 
        <?php
            $titre = $_POST['titre'];
            $res = $_POST['res'];
            $duree = $_POST['duree'];
            enregistrer_film($titre,$duree,$res);
        ?>
<?php require_once('Enpieds.php') ?>
