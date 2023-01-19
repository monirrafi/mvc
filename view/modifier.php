
<?php 
           $results = get_clients($email);
           if($results){   
           foreach($results as $row){ 
            $id =  $row['id'];
            $nom =  $row['nom'];
            $prenom =  $row['prenom'];
            $password =  $row['passWord'];
    
            ?>
            <?php include('Entete.php') ?>

                <section>
                <h2>Donnees de <?= $nom ?></h2>
                <a href="index.php">Retour au Menu</a>

                <form class="row g-3 w-25 p-3" action="index.php" method="POST">
                                <input type="hidden" class="form-control is-valid" id="action" name="action" value="modifier" required>
                                <div class="col-md-12">
                                    <label for="id" class="form-label">ID</label>
                                    <input type="text" class="form-control is-valid" id="id" name="id" value ="<?= $id ?>"  required>
                                </div>
                                <div class="col-md-12">
                                    <label for="nom" class="form-label">Nom</label>
                                    <input type="text" class="form-control is-valid" id="nom" name="nom" value ="<?= $nom ?>" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="prenom" class="form-label">Prenom</label>
                                    <input type="text" class="form-control is-valid" id="prenom" name="prenom" value ="<?= $prenom ?>" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="email" class="form-label">Votre Email</label>
                                    <input type="text" class="form-control is-valid" id="email" name="email" value ="<?= $email ?>" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="password" class="form-label">Mot de Passe</label>
                                    <input type="password" class="form-control is-valid" id="password" name="password" value ="$<?= $password ?>" required>
                                </div>
                                <br/>
                                <div class="col-6">
                                    <button class="btn btn-primary" type="submit">Modifier</button>
                                </div>
                </form>
                <form class="row g-6 w-25 p-3" action="index.php" method="POST">
                                <input type="hidden" class="form-control is-valid" id="action" name="action" value="suprimer" required>
                                <div class="col-md-12">
                                    <input type="hidden" class="form-control is-valid" id="id" name="id" value ="<?= $id ?>"  required>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-primary" type="submit">Suprimer</button>
                                </div>
                </form>
                </section>
    
    
            <?php   } ?>
        <?php   }else{
            $messageErreur = "le courrriel ".$email." n'existe pas ";
            include('MessageErreur.php');
        }
        
        ?>

        <br>
<?php include('status.php') ?>

<?php include('Enpieds.php') ?>
