<?php require_once('../../serveur/model/Read_films.php') ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link rel="stylesheet" href="../utilitaires/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../utilitaires/jquery-3.6.3.min.js"></script>
    <script src="../utilitaires/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
    <script src="../js/global.js"></script>
</head>
</body>

        <?php
            $id = $_POST['id'];
            $result = get_films($id);
            $row = mysqli_fetch_array($result);
             
            if($row == []){
                echo "Film No ".$id." n'existe pas!!";
            }else{
                $sort = $_POST['sort'];        
                $titre = $row['titre'];
                $res = $row['realisateur'];
                $duree = $row['duree'];
                echo $titre.$res.$duree;
                    if($sort == 'modifier'){
        ?>
                    <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <span id="msgErr"></span>
                    <form class="row g-3"action="modifier.php" method="POST">
                    <div class="col-md-12">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" class="form-control is-valid" id="id" name="id" value="<?= $id ?>">
                    </div>
                    <div class="col-md-12">
                    <label for="titre" class="form-label">Titre</label>
                    <input type="text" class="form-control is-valid" id="titre" name="titre" value="<?= $titre ?>">
                    </div>
                    <div class="col-md-12">
                        <label for="res" class="form-label">Réalisateur</label>
                        <input type="text" class="form-control is-valid" id="res" name="res"  value="<?= $res ?>">
                    </div>
                    <div class="col-md-12">
                        <label for="duree" class="form-label">Durée</label>
                        <input type="number" min=30 max=240 class="form-control is-valid" id="duree" name="duree"  value=<?= $duree ?>>
                    </div>
                    <br/>
                    <div class="col-6">
                        <button class="btn btn-primary" type="submit">Modifier</button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-danger" type="reset">Vider</button>
                    </div>
                    </form></div></div></div>
                <?php }else{ ?>
                    <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Suprimer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <span id="msgErrEnreg"></span>
                    <form class="row g-3" action="suprimer.php" method="POST">
                    <div class="col-md-12">
                    <label for="id" class="form-label">Voulez-vous suprimer le film Numero <?= $id ?></label>
                    <input type="hidden" id="id" name="id" value=<?= $id ?>>    
                    </div>
                    <br/>
                    <div class="col-6">
                        <button class="btn btn-primary" type="submit" id="btnOui" name="btnOui">Oui</button>
                        <button class="btn btn-primary" type="submit" id="btnNon" name="btnNon">Non</button>
                    </div>
                    </form></div></div></div>
                <?php  }
            }
                    
            ?>
    <br>
    <a href="../../index.php">Retour à la page d'accueil</a> 
</body>
</html>