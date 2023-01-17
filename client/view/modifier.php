<?php require_once('Entete.php') ?>
    <h2>MODIFICATION D'UN FILM</h2> 
        <?php
            $id = $_POST['id'];
            $titre = $_POST['titre'];
            $res = $_POST['res'];
            $duree = $_POST['duree'];
            modifier_film($id,$titre,$duree,$res);
        ?>
    <br>
<?php require_once('Enpieds.php') ?>
