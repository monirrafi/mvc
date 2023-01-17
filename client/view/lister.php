<?php require_once('Entete.php') ?>
        <h2>Liste des livres</h2>
        <div class="table-responsive">
            <table class="table table-dark table-striped table-sm align-middle w-auto">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Réalisateur</th>
                    <th>Durée</th>
                    </tr>
                </thead>
                <tbody>

               <a> <?php
                $result = get_films(0);

                while ($row = mysqli_fetch_array($result)) {
                    $ID = $row['idf'];
                    $titre = $row['titre'];
                    $res = $row['realisateur'];
                    $duree = $row['duree'];
                ?>
                    <tr>
                        <td><?= $ID ?></td>
                        <td><?= $titre ?></td>
                        <td><?= $res ?></td>
                        <td><?= $duree ?></td>
                    </tr>
               <?php  } ?>
            </table>
        </div>
<?php require_once('Enpieds.php') ?>
