<?php
  $titre = filter_input(INPUT_POST,'titre', FILTER_SANITIZE_STRING);
  $res = filter_input(INPUT_POST,'res', FILTER_SANITIZE_STRING);
  $duree = filter_input(INPUT_POST,'duree', FILTER_SANITIZE_STRING);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link rel="stylesheet" href="client/utilitaires/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="client/css/style.css">
    <script src="client/utilitaires/jquery-3.6.3.min.js"></script>
    <script src="client/utilitaires/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
    <script src="client/js/global.js"></script>
</head>
<body>
    <!--bar de navigation-->
    <nav class="navbar navbar-expand-lg navbar bg-primary" data-bs-theme="dark" >
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Films</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#modalEnregistrer">Enregistrer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="client/view/lister.php">Lister</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#modalModif">Modifier</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"  data-bs-toggle="modal" data-bs-target="#modalSuprimer">Suprimer</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    <!--form de enregistrer-->
    <!-- Modal -->
    <div class="modal fade" id="modalEnregistrer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Enregistrer</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span id="msgErr"></span>
                <form class="row g-3" action="client/view/enregistrer.php" method="POST">
                    <div class="col-md-12">
                        <label for="titre" class="form-label">Titre</label>
                        <input type="text" class="form-control is-valid" id="titre" name="titre" required>
                    </div>
                    <div class="col-md-12">
                        <label for="res" class="form-label">Réalisateur</label>
                        <input type="text" class="form-control is-valid" id="res" name="res" required>
                    </div>
                    <div class="col-md-12">
                        <label for="duree" class="form-label">Durée</label>
                        <input type="number" min=30 max=240 class="form-control is-valid" id="duree" name="duree" required>
                    </div>
                    <br/>
                    <div class="col-6">
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-danger" type="reset">Vider</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    <!--form de lister
    <form id="formLister" action=""  method="POST"></form>-->
    <!--form de modifier-->
    <div class="modal fade" id="modalModif" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span id="msgErrModif"></span>
                <form class="row g-3" action="client/view/afficherForm.php" method="POST">
                    <div class="col-md-12">
                        <label for="id" class="form-label">Numero du livre</label>
                        <input type="text" class="form-control is-valid" id="id" name="id" required>
                        <input type="hidden" id="sort" name="sort" value="modifier">    
                    </div>
                    <br/>
                    <div class="col-6">
                        <button class="btn btn-primary" type="submit">Afficher</button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-danger" type="reset">Vider</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    <!--form de suprimer-->
    <div class="modal fade" id="modalSuprimer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Suprimer</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span id="msgErrModif"></span>
                <form class="row g-3" action="client/view/afficherForm.php" method="POST">
                    <div class="col-md-12">
                        <label for="id" class="form-label">Numero du livre</label>
                        <input type="text" class="form-control is-valid" id="id" name="id" required>
                        <input type="hidden" id="sort" name="sort" value="suprimer">    
                    </div>
                    <br/>
                    <div class="col-6">
                        <button class="btn btn-primary" type="submit">Afficher</button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-danger" type="reset">Vider</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    </body>
</html>