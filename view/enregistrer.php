<?php include('Entete.php') ?>
    <section>
     <h2>Trouver des clients</h2>
     <a href="index.php">Retour au Menu</a>

     <form class="row g-3 w-25 p-3" action="index.php" method="GET">
                    <div class="col-md-12">
                        <label for="email" class="form-label">Votre Email</label>
                        <input type="text" class="form-control is-valid" id="email" name="email" required>
                        <input type="hidden" class="form-control is-valid" id="action" name="action" value="lister" required>
                    </div>
                    <br/>
                    <div class="col-6">
                        <button class="btn btn-primary" type="submit">Lister</button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-danger" type="reset">Vider</button>
                    </div>
                </form>
    </section>
    <section>
     <h2>Enregistrer client</h2>
     <form class="row g-3 w-25 p-3" action="index.php" method="POST">
                    <div class="col-md-12">
                        <input type="hidden" class="form-control is-valid" id="action" name="action" value="enregistrer" required>
                    </div>
                    <div class="col-md-12">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control is-valid" id="nom" name="nom" required>
                    </div>
                    <div class="col-md-12">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control is-valid" id="prenom" name="prenom" required>
                    </div>
                    <div class="col-md-12">
                        <label for="email" class="form-label">Votre Email</label>
                        <input type="text" class="form-control is-valid" id="email" name="email" required>
                    </div>
                    <div class="col-md-12">
                        <label for="password" class="form-label">Mot de Passe</label>
                        <input type="password" class="form-control is-valid" id="password" name="password" required>
                    </div>
                    <br>
                    <br/>
                    
                    <div class="col-6">
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-danger" type="reset">Vider</button>
                    </div>
                </form>
    </section>
    </main>
<br>

<?php include('status.php') ?>
<?php include('Enpieds.php') ?>